<?php

namespace App\Livewire;

use Livewire\Component;

class FormDonasi extends Component
{
    public $nominalDonasi;
    public $nama;
    public $email;
    public $telepon;
    public $doa;
    public $anonymous = false;

    public function submitDonasi()
    {
        dd($this->nominalDonasi, $this->nama, $this->email, $this->telepon, $this->doa, $this->anonymous);
    }

    public function render()
    {
        return view('livewire.form-donasi')->layout('layout.layout1');
    }
}
