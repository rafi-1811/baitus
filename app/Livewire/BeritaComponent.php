<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\Attributes\Title;

class BeritaComponent extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[Title("Berita - Yayasan Baitus Sa'adah Amanah")]
    public function render()
    {
        $berita = Berita::with('program')->where('status', 'published')->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.pages.berita', compact('berita'))->layout('layout.layout', [
            'titleBread' => 'Berita',
            'subTitleBread' => 'Home'
        ]);
    }
}
