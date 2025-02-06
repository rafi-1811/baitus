<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Title('Yayasan Baitus Saadah Amanah')]
    public function render()
    {
        return view('livewire.pages.home')->layout('layout.layout1');
    }
}
