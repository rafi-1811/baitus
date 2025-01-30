<?php

namespace App\Livewire;

use Livewire\Component;

class Campaign extends Component
{
    public function render()
    {
        return view('livewire.pages.campaign')->layout('layout.layout', [
            'titleBread' => 'Campaign',
            'subTitleBread' => 'Beranda'
        ]);
    }
}
