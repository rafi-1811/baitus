<?php

namespace App\Livewire;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Donatur;
use Livewire\Component;
use App\Models\Campaign;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use App\Jobs\SendThankYouEmail;



class FormDonasi extends Component
{
    use WithRateLimiting;

    public $nominalDonasi;
    public $nama;
    public $email;
    public $telepon;
    public $doa;
    public $anonymous = false;
    public $campaign;
    public $snapToken;

    protected function rules()
    {
        return [
            'nominalDonasi' => 'required|numeric|min:10000',
            'nama' => 'required|min:3',
            'email' => 'nullable|email',
            'telepon' => ['nullable', 'regex:/^(\+62|62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{4}[\s-]?\d{2,5}$/'],
            'doa' => 'nullable|string|min:3',
        ];
    }

    protected function messages()
    {
        return [
            'nominalDonasi.required' => 'Nominal donasi harus diisi.',
            'nominalDonasi.numeric' => 'Nominal donasi harus berupa angka.',
            'nominalDonasi.min' => 'Nominal donasi minimal Rp 10.000',
            'nama.required' => 'Nama harus diisi.',
            'nama.min' => 'Nama minimal 3 karakter.',
            'email.email' => 'Email tidak valid.',
            'telepon.regex' => 'Format nomor telepon tidak valid. Gunakan format: 08xxx atau +62xxx',
            'doa.min' => 'Doa minimal 3 karakter.',
        ];
    }

    public function updated($field)
    {
        $this->resetValidation(['nama', 'nominalDonasi', 'email', 'telepon', 'doa']);
    }

    private function getTransactionId()
    {
        $transactionId = 'DONASIBSA-' . now()->format('YmdHis') . '-' . strtoupper(Str::random(4)) . '-U' . auth()->id();
        return $transactionId;
    }

    private function createDonatur()
    {
        if (!$this->campaign) {
            throw new \Exception('Campaign tidak ditemukan');
        }

        $donatur = Donatur::create([
            "id" => (string) Str::uuid(),
            "campaign_id" => $this->campaign->id,
            "transaksi_id" => $this->getTransactionId(),
            "jumlah" => $this->nominalDonasi,
            "nama" => $this->nama,
            "email" => $this->email,
            "doa" => $this->doa,
            "status" => 'PENDING',
        ]);

        return $donatur;
    }

    private function setMidtransConfig()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    private function createMidtransParams($donatur)
    {
        return [
            'transaction_details' => [
                'order_id' => $donatur->transaksi_id,
                'gross_amount' => $this->nominalDonasi,
            ],
            'customer_details' => [
                'first_name' => $this->nama,
                'email' => $this->email ?? null,
            ],
            'item_details' => [
                [
                    'id' => 'donasi-' . time(),
                    'price' => $this->nominalDonasi,
                    'quantity' => 1,
                    'name' => 'Donasi untuk campaign ' . $this->campaign->judul,
                ]
            ]
        ];
    }

    public function submitDonasi()
    {
        // ini fungsi rate limit buat antisipasi spam spam kaga jelas
        try {
            $this->rateLimit(5, 350);
        } catch (TooManyRequestsException $exception) {
            session()->flash('error', "Mohon tunggu {$exception->secondsUntilAvailable} detik sebelum mengirim ulang donasi");
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.');
        }

        // ini handle error klo campaignnya kaga ada
        if (!$this->campaign) {
            session()->flash('error', 'Campaign tidak ditemukan');
            return;
        }

        // ini fungsi nominal yang tadinya string jadi type integer
        $this->nominalDonasi = (int) str_replace('.', '', $this->nominalDonasi);

        // kalo checkbox anonimnya di centang namanya jadi 'Hamba Allah'
        if ($this->anonymous === true) {
            $this->nama = 'Hamba Allah';
        }

        // validasi form
        $this->validate();

        // buat data donatur
        $donatur = $this->createDonatur();

        // config midtrans
        $this->setMidtransConfig();

        // siapin params buat snap token midtrans
        $params = $this->createMidtransParams($donatur);

        // reset form kalo abis submit tombolnya
        // $this->reset();

        try {
            // ini bikin snap tokennya
            $this->snapToken = Snap::getSnapToken($params);
            $this->dispatch('donasiSent', [
                'campaign_id' => $donatur->campaign_id,
                'nama' => $donatur->nama,
                'jumlah' => $donatur->jumlah,
                'doa' => $donatur->doa,
                'snapToken' => $this->snapToken,
            ]);
        } catch (\Exception $e) {
            Log::error('Midtrans Error: ' . $e->getMessage());
            session()->flash('error', 'Terjadi kesalahan saat memproses donasi. Silakan coba lagi.');
            return;
        }
    }

    public function mount($slug)
    {
        $this->campaign = Campaign::with('donaturs')->where('slug', $slug)->first();
        if (!$this->campaign) {
            abort(404, 'Campaign tidak ditemukan');
        }
    }

    public function render()
    {
        return view('livewire.form-donasi')->layout('layout.layout1');
    }

    private function updateStatusDonatur($order_id, $status)
    {
        $donatur = Donatur::where('transaksi_id', $order_id)->first();

        if($donatur) {
            $donatur->update(['status' => $status]);
        }

        return $donatur;
    }

    #[On('paymentSuccess')]
    public function handlePaymentSuccess($order_id, $campaign_id)
    {
        $donatur = $this->updateStatusDonatur($order_id, 'SUCCESS');
        // SUM tabel jumlah yang statusnya SUCCESS
        $totalTerkumpul = Donatur::where('campaign_id', $campaign_id)
            ->where('status', 'SUCCESS')
            ->sum('jumlah');
        
        // update total terkumpul
        Campaign::where('id', $campaign_id)
            ->update(['terkumpul' => $totalTerkumpul]);
        
        // kirim notifikasi
        $this->dispatch('modalSuccess', [
            "nama" => $this->nama,
        ]);

        // kirim email
        SendThankYouEmail::dispatch($donatur)
                ->delay(now()->addSeconds(30))
                ->onQueue('emails');

        $this->redirect('/campaign', navigate: true);
    }

    #[On('paymentPending')]
    public function handlePaymentPending($order_id)
    {
        $this->updateStatusDonatur($order_id, 'PENDING');
        $this->redirect('/campaign', navigate: true);
    }

    #[On('paymentError')]
    public function handlePaymentError($order_id)
    {
        $this->updateStatusDonatur($order_id, 'FAILED');
        $this->redirect('/campaign', navigate: true);
    }

    #[On('paymentClosed')]
    public function handlePaymentClosed()
    {
        $this->redirect('/campaign', navigate: true);
    }
}
