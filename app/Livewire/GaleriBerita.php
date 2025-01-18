<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class GaleriBerita extends Component
{
    public $docs;
    public $videoId;

    public function mount($slug)
    {
        $this->docs = Berita::where('slug', $slug)->firstOrFail();
        $this->videoId = $this->docs->id_youtube;
    }

    public function render()
    {
        return view('livewire.pages.galeri-berita')->layout('layout.layout', [
            'title' => 'Dokumentasi Berita',
            'subTitle' => 'Home'
        ]);
    }
}
