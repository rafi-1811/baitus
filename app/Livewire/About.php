<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.pages.about')->layout('layout.layout', [
            'title' => 'Tentang Kami',
            'subTitle' => 'Beranda'
        ]);
    }
}
