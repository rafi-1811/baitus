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


    <style>
        .search-result {
            position: absolute;
            background: #eaecef;
            z-index: 100;
            left: 0;
            right: 0;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .search-result-title {
            text-align: center;
        }

        .search-result-item {
            margin: 0;
            display: -webkit-box;
            text-overflow: ellipsis;
            overflow: hidden;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            margin-bottom: 15px;
            color: #7f879e;
        }

        .search-result-item:hover {
            color: var(--clr-theme-primary);
        }

        .search-result-item:last-child {
            margin-bottom: 0;
        }
    </style>

</div>
