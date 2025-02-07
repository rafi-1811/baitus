<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Title("Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim")]
    public function render()
    {
        return view('livewire.pages.home')->layout('layout.layout1');
    }
}
