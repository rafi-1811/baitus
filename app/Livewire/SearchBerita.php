<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class SearchBerita extends Component
{
    public $search = '';

    public $berita = [];

    public $error = false;

    public function cari()
    {
        $data = Berita::search($this->search)->get();

        if($data->isEmpty()) {
            $this->error = true;
        }

        $this->berita = $data;
    }

    public function render()
    {
        return view('livewire.search-berita',[
            'berita' => $this->berita
        ]);
    }
}
