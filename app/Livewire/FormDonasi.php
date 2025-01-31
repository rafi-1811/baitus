<?php

namespace App\Livewire;

use App\Models\Donatur;
use Livewire\Component;
use App\Models\Campaign;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
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

    protected function rules() {
        return [
            'nominalDonasi' => 'required|numeric|min:10000',
            'nama' => 'required|min:3',
            'email' => 'nullable|email',
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
            'doa.min' => 'Doa minimal 3 karakter.',
        ];
    }

    public function updated($field)
    {
        $this->resetValidation(['nama', 'nominalDonasi','email', 'doa']);
    }

    public function submitDonasi()
    {
        $this->nominalDonasi = (int) str_replace('.', '', $this->nominalDonasi);

        if ($this->anonymous === true) {
            $this->nama = 'Hamba Allah';
        }

        // validasinya disini
        $this->validate();

        $transactionId = 'DONASIBSA-' . now()->format('YmdHis') . '-' . strtoupper(Str::random(4)) . '-U' . auth()->id();

        // Simpan data donasi ke database table donatur
        Donatur::create([
            "id" => (string) Str::uuid(),
            "campaign_id" => $this->campaign->id,
            "transaksi_id" => $transactionId, 
            "jumlah" => $this->nominalDonasi,
            "nama" => $this->nama,
            "email" => $this->email,
            "doa" => $this->doa,
            "status" => 'PENDING',
        ]);

        session()->flash('success', 'Donasi berhasil dikirim');

        $this->reset();
    }


    public function mount($slug) {
        $this->campaign = Campaign::with('donaturs')->where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.form-donasi')->layout('layout.layout1');
    }
}
