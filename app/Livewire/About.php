<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class About extends Component
{
    #[Title('Tentang Kami - Yayasan Baitus Saadah Amanah')]
    public function render()
    {
        return view('livewire.pages.about')->layout('layout.layout', [
            'titleBread' => 'Tentang Kami',
            'subTitleBread' => 'Beranda'
        ]);
    }
}
