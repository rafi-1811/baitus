<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campaign;

class DetailCampaign extends Component
{
    public $campaign;

    public function mount($slug)
    {
        $this->campaign = Campaign::with('donaturs')->where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.pages.detail-campaign',[
            'campaign' => $this->campaign
        ])->layout('layout.layout1', [
            'titleBread' => 'Detail Campaign',
            'subTitleBread' => 'Home'
        ]);
    }
}
