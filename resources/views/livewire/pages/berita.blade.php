<div class="container1">
    <div class="content1">
        {{-- Breadcump title --}}
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="h211_section-area text-center mb-50">
                    <h2 class="h21_section-title">Berita</h2>
                </div>
            </div>
        </div>
        {{-- end --}}

        {{-- Section Berita --}}
        <div class="row">
            @forelse ($berita as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left">
                    <div class="h2_blog-item mb-35">
                        <a wire:navigate href="{{ route('detail-berita', ['slug' => $item->slug]) }}">
                            <div class="h2_blog-img w_img mb-25">
                                <img src="{{ asset('storage/' . $item->cover_gambar_berita) }}"
                                    alt="gambar {{ $item->kategori }}">
                            </div>
                        </a>
                        <div class="h2_blog-content">
                            <div class="h2_blog-content-meta">
                                <span>{{ $item->kategori }}</span>
                                <span><i
                                        class="fa-light fa-calendar-days"></i>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                            </div>
                            <h4 class="h2_blog-content-title">
                                <a wire:navigate href="{{ route('detail-berita', ['slug' => $item->slug]) }}">
                                    {{ $item->judul }}
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            @empty
                <h1 class="text-center">Data Tidak Ditemukan</h1>
            @endforelse
            {{-- pagination --}}
            <div>{{ $berita->links('pagination.custom', data: ['scrollTo' => false]) }}</div>
        </div>
        {{-- end --}}

    </div>

    {{-- Section Kategori Program --}}
    <div class="sidebar1">
        <h6>Kategori Program</h6>
        <ul class="space-y-2">
            @foreach ($staticData['program'] as $item)
                <li class="border-b-2 py-0.5">
                    <a href="{{ route('detail-berita', ['slug' => $item->slug]) }}"
                        class="flex justify-between items-center text-blue-600">
                        <span
                            class="text-gray-600 hover:text-gray-800 font-roboto text-sm">{{ $item->kategori_program }}
                            ({{ $item->berita->count() }})
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    {{-- end --}}
</div>
