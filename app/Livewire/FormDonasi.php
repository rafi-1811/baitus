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

    protected function rules() {
        return [
            'nominalDonasi' => 'required|numeric|min:10000',
            'nama' => 'required|min:3',
            'email' => 'nullable|email',
            'telepon' => ['nullable', 'regex:/^(\+62|62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{4}[\s-]?\d{2,5}$/'],
            'doa' => 'nullable|string|min:3',
        ];
    }

    protected function messages() {
        return [
            'nominalDonasi.required' => 'Nominal donasi harus diisi.',
            'nominalDonasi.numeric' => 'Nominal donasi harus berupa angka.',
            'nominalDonasi.min' => 'Nominal donasi minimal Rp 10.000.',
            'nama.required' => 'Nama harus diisi.',
            'nama.min' => 'Nama minimal 3 karakter.',
            'email.email' => 'Email tidak valid.',
            'telepon.regex' => 'Format nomor telepon tidak valid. Gunakan format: 08xxx atau +62xxx',
            'doa.min' => 'Doa minimal 3 karakter.',
        ];
    }

    public function updated($field)
    {
        $this->resetValidation(['nama', 'nominalDonasi','email', 'telepon', 'doa']);
    }

    private function getTransactionId() {
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

    private function createMidtransParams() 
    {
        return [
            'transaction_details' => [
                'order_id' => $this->getTransactionId(),
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
        if (!$this->campaign) {
            session()->flash('error', 'Campaign tidak ditemukan');
            return;
        }

        $this->nominalDonasi = (int) str_replace('.', '', $this->nominalDonasi);

        if ($this->anonymous === true) {
            $this->nama = 'Hamba Allah';
        }

        // calidasi form
        $this->validate();

        try {
            $this->rateLimit(5, 350);
            $donatur = $this->createDonatur();
        } catch (TooManyRequestsException $exception) {
            session()->flash('error', "Mohon tunggu {$exception->secondsUntilAvailable} detik sebelum mengirim ulang donasi");
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.');
        }

        $this->setMidtransConfig();

        $params = $this->createMidtransParams();

        $this->reset();

        try {
            $this->snapToken = Snap::getSnapToken($params);
            $this->dispatch('donasiSent', [
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

    public function mount($slug) {
        $this->campaign = Campaign::with('donaturs')->where('slug', $slug)->first();
        if (!$this->campaign) {
            abort(404, 'Campaign tidak ditemukan');
        }
    }

    public function render()
    {
        return view('livewire.form-donasi')->layout('layout.layout1');
    }

    #[On('paymentSuccess')] 
    public function handlePaymentSuccess($result)
    {
        Donatur::where('transaksi_id', $result['order_id'])
            ->update(['status' => 'SUCCESS']);
            
        session()->flash('success', 'Pembayaran berhasil!');
    }
    
    #[On('paymentPending')]
    public function handlePaymentPending($result)
    {
        Donatur::where('transaksi_id', $result['order_id'])
            ->update(['status' => 'PENDING']);
            
        session()->flash('info', 'Menunggu pembayaran');
    }
    
    #[On('paymentError')]
    public function handlePaymentError($result)
    {
        Donatur::where('transaksi_id', $result['order_id'])
            ->update(['status' => 'FAILED']);
            
        session()->flash('error', 'Pembayaran gagal');
    }
    
    #[On('paymentClosed')]
    public function handlePaymentClosed()
    {
        session()->flash('info', 'Pembayaran dibatalkan');
    }
}
