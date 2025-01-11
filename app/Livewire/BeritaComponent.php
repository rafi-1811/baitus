<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class BeritaComponent extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        $berita = Berita::with('program')->where('status', 'published')->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.pages.berita', compact('berita'))->layout('layout.layout', [
            'title' => 'Berita',
            'subTitle' => 'Home'
        ]);
    }
}
