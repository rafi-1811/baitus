<?php

namespace App\Livewire;

use Livewire\Component;

class CounterYatim extends Component
{
    public $dataYatim;

    public function mount($dataYatim)
    {
        $this->dataYatim = $dataYatim;
    }

    public function render()
    {
        return view('livewire.counter-yatim');
    }
}
