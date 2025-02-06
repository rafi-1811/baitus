{{-- SEO --}}
@section('title', "Berita - Yayasan Baitus Sa'adah Amanah")
@section('meta_description',
    'Dapatkan informasi terbaru seputar kegiatan, program, dan berbagai kegiatan yang kami
    lakukan di Yayasan Baitus Saadah Amanah. Di halaman ini, kami berbagi berita terkini mengenai usaha kami dalam mendukung
    anak yatim dan membangun masyarakat yang lebih peduli. Ikuti kami untuk selalu mendapatkan update tentang bagaimana kami
    membantu mereka yang membutuhkan.')
@section('meta_keywords',
    'berita Yayasan Baitus Saadah Amanah, kegiatan yayasan, program yayasan, donasi anak yatim,
    berita terkini, kegiatan sosial, bantuan anak yatim, kegiatan pendidikan anak yatim, info yayasan, kegiatan sosial')
    {{-- @section('meta_image') --}}


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
                        <div wire:key="{{ $item->slug }}" class="col-xl-4 col-lg-4 col-md-6 tp_fade_left"
                            data-fade-from="left">
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
            <div class="sidebar1 position-relative">
                @livewire('search-berita')
                <div class="blog_details-widget mb-30 tp_fade_left">
                    <h5 class="blog_details-widget-title mb-25">Kategori Program</h5>
                    <ul>
                        @foreach ($staticData['program'] as $item)
                            <li wire:key="{{ $item->slug }}"><a wire:navigate
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
