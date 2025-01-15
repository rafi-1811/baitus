<div class="container">
    {{-- Breadcump title --}}
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="h211_section-area text-center mb-50">
                <h2 class="h21_section-title">Berita</h2>
            </div>
        </div>
    </div>
    {{-- end --}}

    <div class="wrap-item-berita">
        {{-- Section Berita --}}
        <div class="content1">
            <div class="row">
                @forelse ($berita as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left">
                        <div class="h2_blog-item mb-35">
                            <a wire:navigate href="{{ route('detail-berita', ['slug' => $item->slug]) }}">
                                <div class="h2_blog-img w_img">
                                    <img src="{{ asset('storage/' . $item->cover_gambar_berita) }}"
                                        alt="gambar {{ $item->kategori }}">
                                </div>
                            </a>
                            <div class="h2_blog-content">
                                <div class="h2_blog-content-meta">
                                    <span><a wire:navigate
                                            href="{{ route('detail-program', ['slug' => $item->program->slug]) }}">{{ $item->program->kategori_program }}</a></span>
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
                    <h4 class="text-center text-danger">Data Tidak Ditemukan</h4>
                @endforelse
                {{-- pagination --}}
                <div>{{ $berita->links('pagination.custom', data: ['scrollTo' => false]) }}</div>
            </div>
        </div>
        {{-- end --}}


        {{-- Section Kategori Program --}}
        <div class="sidebar1">
            <div class="blog_details-widget mb-30 tp_fade_left">
                <h5 class="blog_details-widget-title mb-25">Kategori Program</h5>
                <ul>
                    @foreach ($staticData['program'] as $item)
                        <li><a wire:navigate
                                href="{{ route('detail-program', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}
                                <span>({{ $item->berita->count() }})</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- end --}}
    </div>

</div>
