<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class GaleriBerita extends Component
{
    public $docs;

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
