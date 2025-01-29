<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;
use App\Services\NewsContentService;
use Illuminate\Support\Facades\Http;

class BeritaDetail extends Component
{
    public Berita $berita;
    public $content;
    public $likes;
    public $views;
    public $shareUrl;

    protected $newsContentService;

    public function mount(NewsContentService $newsContentService, $slug)
    {
        $this->newsContentService = $newsContentService;
        $this->berita = Berita::with('program')->where('slug', $slug)->firstOrFail();
        $this->content = $this->newsContentService->splitContent($this->berita->body);

        $videoId = $this->berita->id_youtube;
        $apiKey = config('services.youtube.api_key');
        $baseUrl = "https://www.googleapis.com/youtube/v3/videos?part=statistics&id={$videoId}&key={$apiKey}";

        $response = Http::get($baseUrl);

        if ($response->requestTimeout()) {
            $this->likes = 0;
            $this->views = 0;
            return;
        }

        $this->shareUrl = url("berita/{$this->berita->slug}");

        $data = $response->json();

        $this->likes = $this->formatDataYoutube($data['items'][0]['statistics']['likeCount'] ?? 0);
        $this->views = $this->formatDataYoutube($data['items'][0]['statistics']['viewCount'] ?? 0);
    }

    private static function formatDataYoutube($data)
    {
        if ($data >= 10000) {
            return floor($data / 1000) . 'K+';
        }

        return $data;
    }

    public function render()
    {
        return view('livewire.pages.berita-detail')->layout('layout.layout', [
            'titleBread' => $this->berita->judul,
            'subTitleBread' => 'Home'
        ])->title("Berita Detail - {$this->berita->judul}");
    }
}
