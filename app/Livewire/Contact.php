<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.pages.contact')->layout('layout.layout', [
            'title' => 'Kontak Kami',
            'subTitle' => 'Beranda'
        ]);
    }
}
