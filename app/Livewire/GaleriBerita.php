<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class GaleriBerita extends Component
{
    public $docs;
    // public $isOpen = false;
    // public $currentIndex = 0;

    // public function openModal($index)
    // {
    //     // dd($index);
    //     $this->currentIndex = $index;
    //     $this->isOpen = true;
    // }

    // public function closeModal()
    // {
    //     $this->isOpen = false;
    // }

    public function mount($slug)
    {
        $this->docs = Berita::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.galeri-berita')->layout('layout.layout', [
            'title' => 'Dokumentasi Berita',
            'subTitle' => 'Home'
        ]);
    }
}
