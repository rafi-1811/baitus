<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Campaign as Kampanye;

class Campaign extends Component
{
    #[Title("Campaign - Yayasan Baitus Sa'adah Amanah")]
    public $campaign;

    public function mount()
    {
        $this->campaign = Kampanye::with('donaturs')->where('status', 'Aktif')->get();
    }

    public function render()
    {
        return view('livewire.pages.campaign', [
            'campaign' => $this->campaign
        ])->layout('layout.layout', [
            'titleBread' => 'Campaign',
            'subTitleBread' => 'Beranda'
        ]);
    }
}
