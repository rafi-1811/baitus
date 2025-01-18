<?php

namespace App\Livewire;

use App\Models\Pesan;
use Livewire\Component;
use Livewire\Attributes\Validate;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Illuminate\Validation\ValidationException;

class FormKontak extends Component
{
    use WithRateLimiting;

    #[Validate('required', message: 'Nama tidak boleh kosong')]
    #[Validate('string', message: 'Nama harus berupa karakter')]
    #[Validate('min:3', message: 'Nama minimal 3 karakter')]
    public $nama = '';

    #[Validate('required', message: 'Email tidak boleh kosong')]
    #[Validate('email', message: 'Email tidak valid')]
    public $email = '';

    #[Validate('required', message: 'Nomor Telepon tidak boleh kosong')]
    #[Validate('regex:/^(\+62|62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{4}[\s-]?\d{2,5}$/', message: 'Nomor Telepon tidak valid')]
    public $telepon = '';

    #[Validate('required', message: 'Pesan tidak boleh kosong')]
    #[Validate('string', message: 'Pesan harus berupa karakter')]
    #[Validate('min:5', message: 'Pesan minimal 5 karakter')]
    public $pesan = '';

    public function save()
    {
        $validated = $this->validate();

        try {
            $this->rateLimit(5, 350);
            Pesan::create($validated);
            session()->flash('success', 'Pesan berhasil dikirim');
        } catch (TooManyRequestsException $exception) {
            session()->flash('error', "Mohon tunggu {$exception->secondsUntilAvailable} detik sebelum mengirim ulang pesan");
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.');
        }

        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.form-kontak');
    }
}
