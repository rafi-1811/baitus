<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class SearchBerita extends Component
{
    public $search = '';

    public $berita = [];

    public $isOpen = false;

    public function cari()
    {
        $data = Berita::search($this->search)->get();

        if ($data->isEmpty()) {
            $this->reset(['search']);
        }

        $this->isOpen = true;
        $this->berita = $data;
    }

    function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.search-berita', [
            'berita' => $this->berita
        ]);
    }
}
