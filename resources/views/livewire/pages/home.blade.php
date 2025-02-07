{{-- SEO --}}
@section('title', "Beranda - Yayasan Baitus Sa'adah Amanah")
@section('meta_description',
    'Yayasan Baitus Saadah Amanah adalah lembaga sosial yang berfokus pada pemberdayaan anak
    yatim. Kami mendampingi dan membina 120 anak yatim dengan memberikan pendidikan, kebutuhan pokok, serta bimbingan moral
    dan spiritual. Bergabunglah bersama kami dalam upaya menciptakan masa depan yang lebih baik untuk mereka, dan berikan
    kontribusi positif bagi sesama.')
@section('meta_keywords',
    'Yayasan Baitus Saadah Amanah, lembaga sosial, anak yatim, donasi, bimbingan moral, pendidikan
    anak yatim, peduli yatim, yayasan sosial, bantuan yatim, sedekah, infak, zakat')
    {{-- @section('meta_image') --}}



@section('header')
    <x-header />
@endsection



<main>
    {{-- Section Banner --}}
    <section class="slider_container">
        @if ($staticData['banner'])
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    @foreach ($staticData['banner'] as $index => $item)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}">
                        </button>
                    @endforeach
                </div>

                <!-- Slides -->
                <div class="carousel-inner">
                    @foreach ($staticData['banner'] as $index => $item)
                        <div wire:key="{{ $item->id }}" class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="d-block w-100"
                                alt="{{ $item->caption }}">
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @else
            <p>Image Slide belum ditetapkan.</p>
        @endif
    </section>

    <!-- 1 Section Tentang Kami -->
    <x-tentang-kami />

    <!-- 2 Section Program -->
    <x-program-kami />

    <!-- 3 Section Visi Misi -->
    <x-visi-misi />

    {{-- 4 Section Data Yatim --}}
    <x-data-yatim />

    {{-- Section Rekening --}}
    <section class="rekening-area pt-110 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-xl-6 col-lg-6 col-md-8">
                    <div class="h4_section-area text-center mb-25">
                        <span class="section-subtitle tp_fade_left">Bahagiakan Yatim Pasti Bisa</span>
                        <h2 class="h4_section-title tp_title_slideup">Rekening Donasi</h2>
                        <p class="mt-20 desc_title">Salurkan Bantuan Anda untuk Masa Depan Anak Yatim yang Lebih Cerah.
                            Setiap Rupiah Membawa Harapan dan Kebahagiaan bagi Mereka yang Membutuhkan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($staticData['rekening'] as $item)
                    <div wire:key="{{ $item->id }}" class="col-xl-3 col-lg-3 col-md-3 tp_fade_left"
                        data-fade-from="left">
                        <div class="rekening_service-item">
                            <div class="rekening_service-item-icon">
                                <img src="{{ asset('storage/' . $item->gambar_rekening_bank) }}"
                                    alt="{{ $item->nama_bank }}">
                            </div>
                            <h5 class="rekening_service-item-title">{{ $item->no_rekening }}</h5>
                            <p>a.n {{ $item->nama_rekening }}</p>
                        </div>
                    </div>
                @empty
                    <h4 class="text-center text-danger">Rekening Belum Ditetapkan</h4>
                @endforelse
            </div>

            <div class="md-1" data-fade-from="left" data-delay=".8">
                <div class="rekening_service-item1 mb-30">
                    <div class="rekening_service-item1-icon">
                        <img src="{{ asset('assets/images/rekening/qris.png') }}" alt="Gambar Qris">
                    </div>
                    <h5 class="rekening_service-item1-title">Qris</h5>
                    <p>a.n Yayasan Baitus Sa'adah Amanah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Recent Berita -->
    <section class="h21_blog-area">
        <div class="container">
            <!-- Judul Utama -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-xl-6 col-lg-6 col-md-8">
                    <div class="section-area text-center mb-50">
                        <span class="section-subtitle tp_fade_left">Bahagiakan Yatim Pasti Bisa</span>
                        <h2 class="section-title tp_title_slideup mb-0">Berita Terbaru</h2>
                    </div>
                </div>
            </div>

            <!-- Tombol Lihat Semua -->
            <div class="row">
                <div class="col-12">
                    <div class="section-area text-end mb-30">
                        <h6 class="tp_fade_left d-flex justify-content-end align-items-center gap-2">
                            <a wire:navigate href="{{ route('berita') }}" class="text-decoration-none text-dark">
                                Lihat Semua
                            </a>
                            <i class="fa-solid fa-arrow-right"></i>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- Daftar Berita -->
            <div class="row">
                @forelse ($staticData['berita'] as $item)
                    <div wire:key="{{ $item->slug }}" class="col-xl-4 col-md-6 col-sm-12 mb-20">
                        <div class="h2_blog-item">
                            <div class="h2_blog-img w_img">
                                <a wire:navigate href="{{ route('detail-berita', ['slug' => $item->slug]) }}">
                                    <img src="{{ asset('storage/' . $item->cover_gambar_berita) }}"
                                        alt="{{ $item->program->kategori_program }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="h2_blog-content">
                                <div class="h2_blog-content-meta">
                                    <span>
                                        <a wire:navigate
                                            href="{{ route('detail-program', ['slug' => $item->program->slug]) }}"
                                            class="text-decoration-none">
                                            {{ $item->program->kategori_program }}
                                        </a>
                                    </span>
                                    <span class="ms-3">
                                        <i class="fa-light fa-calendar-days"></i>
                                        {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->format('d F Y') }}
                                    </span>
                                </div>
                                <h4 class="h2_blog-content-title">
                                    <a wire:navigate href="{{ route('detail-berita', ['slug' => $item->slug]) }}"
                                        class="text-decoration-none">
                                        {{ $item->judul }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-center text-danger">Data Tidak Ditemukan</h4>
                @endforelse
            </div>
        </div>
    </section>

    {{-- 5 Section Data Yatim --}}
    <x-donasi />

</main>


@section('footer')
    <x-footer />
@endsection
