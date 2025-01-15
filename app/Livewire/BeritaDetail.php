<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;
use App\Services\NewsContentService;

class BeritaDetail extends Component
{
    public Berita $berita;
    public $content;

    protected $newsContentService;

    // Menghapus __construct dan menyuntikkan dependensi di mount()
    public function mount(NewsContentService $newsContentService, $slug)
    {
        $this->newsContentService = $newsContentService;
        $this->berita = Berita::with('program')->where('slug', $slug)->firstOrFail();
        $this->content = $this->newsContentService->splitContent($this->berita->body);
    }

    public function render()
    {
        return view('livewire.pages.berita-detail')->layout('layout.layout', [
            'title' => $this->berita->judul,
            'subTitle' => 'Home'
        ]);
    }
}
