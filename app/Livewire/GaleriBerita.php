<?php

namespace App\Livewire;

use Livewire\Component;

class GaleriBerita extends Component
{

    public function mount($slug){
        dd($slug);
    }

    public function render()
    {
        return view('livewire.pages.galeri-berita')->layout('layout.layout', [
            'title' => 'Galeri Berita',
            'subTitle' => 'Home'
        ]);
    }
}
