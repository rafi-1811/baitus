<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Contact extends Component
{
    #[Title('Kontak Kami - Yayasan Baitus Saadah Amanah')]
    public function render()
    {
        return view('livewire.pages.contact')->layout('layout.layout', [
            'titleBread' => 'Kontak Kami',
            'subTitleBread' => 'Beranda'
        ]);
    }
}
