<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;
use Livewire\Attributes\Title;

class GaleriBerita extends Component
{
    public $docs;
    public $videoId;

    #[Title('Dokumentasi Berita - Yayasan Baitus Saadah Amanah')]
    public function mount($slug)
    {
        $this->docs = Berita::where('slug', $slug)->select(['gambar_dokumentasi', 'id_youtube', 'slug'])->firstOrFail();
        $this->videoId = $this->docs->id_youtube;
    }

    public function render()
    {
        return view('livewire.pages.galeri-berita')->layout('layout.layout', [
            'titleBread' => 'Dokumentasi Berita',
            'subTitleBread' => 'Home'
        ]);
    }
}
