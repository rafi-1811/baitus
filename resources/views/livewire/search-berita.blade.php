<div class="blog_details-widget mb-30 tp_fade_left" wire:click.outside="closeModal">
    <h5 class="blog_details-widget-title mb-30">Cari Berita</h5>
    <form wire:submit="cari" class="blog_details-widget-search">
        <input type="text" placeholder="Cari disini..." wire:model="search">
        <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
    </form>

    @if ($isOpen)
        <div class="search-result mt-3">
            <p class="search-result-title">Hasil pencarian</p>
            @forelse ($berita as $item)
                <a href="{{ route('detail-berita', $item->slug) }}" wire:navigate
                    class="search-result-item">{{ $item->judul }}</a>
            @empty
                <p class="text-center search-result-item">Hasil pencarian tidak ditemukan</p>
            @endforelse
        </div>
    @endif
</div>
