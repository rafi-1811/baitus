<?php

namespace App\Livewire;

use App\Models\Donatur;
use Livewire\Component;
use App\Models\Campaign;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

class DetailCampaign extends Component
{
    public $campaign;
    public $donatur;

    #[On('donasiSent')]
    public function updateDonasi($data)
    {
        $this->donatur = $this->campaign->donaturs()->where('status', 'SUCCESS')->latest()->get();
    }

    public function mount($slug)
    {
        $this->campaign = Campaign::with('donaturs')->where('status', 'Aktif')->where('slug', $slug)->firstOrFail();
        $this->donatur = $this->campaign->donaturs()->where('status', 'SUCCESS')->latest()->get();
    }

    public function render()
    {
        return view('livewire.pages.detail-campaign', [
            'campaign' => $this->campaign
        ])->layout('layout.layout1', [
            'titleBread' => 'Detail Campaign',
            'subTitleBread' => 'Home'
        ])->title("{$this->campaign->judul} - Yayasan Baitus Sa'adah Amanah");
    }
}
