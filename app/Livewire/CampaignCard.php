<?php

namespace App\Livewire;

use Livewire\Component;

class CampaignCard extends Component
{
    public $campaign;
    
    public function render()
    {
        return view('livewire.campaign-card');
    }
}
