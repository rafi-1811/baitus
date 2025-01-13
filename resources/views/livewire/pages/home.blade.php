@section('header')
    <x-header />
@endsection



<main>
    {{-- banner lama --}}
    {{-- <section class="slider_container">
                @if ($staticData['banner'])
                    <div class="slider">
                        <div class="slides">
                            <!--radio buttons start-->
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <!--radio buttons end-->
                            <!--slide images start-->
                            @foreach ($staticData['banner'] as $item)
                                <div class="slide first">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->caption }}" />
                                </div>
                            @endforeach
                            <!--slide images end-->
                            <!--automatic navigation start-->
                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                            </div>
                            <!--automatic navigation end-->
                        </div>
                        <!--manual navigation start-->
                        <div class="navigation-manual">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                            <label for="radio4" class="manual-btn"></label>
                        </div>
                        <!--manual navigation end-->
                    </div>
                    <!--image slider end-->

                    <script type="text/javascript">
                        var counter = 1;
                        setInterval(function() {
                            document.getElementById('radio' + counter).checked = true;
                            counter++;
                            if (counter > 4) {
                                counter = 1;
                            }
                        }, 2000);
                    </script>
                @else
                    <p>Image Slide belum ditetapkan.</p>
                @endif
            </section> --}}

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
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
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
                        <span class="section-subtitle tp_fade_left">Bahagia Bersama Yatim</span>
                        <h2 class="h4_section-title tp_title_slideup">Rekening Donasi</h2>
                        <p class="mt-20">Salurkan Bantuan Anda untuk Masa Depan Anak Yatim yang Lebih Cerah.
                            Setiap Rupiah Membawa Harapan dan Kebahagiaan bagi Mereka yang Membutuhkan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($staticData['rekening'] as $item)
                    <div class="col-xl-3 col-lg-3 col-md-3 tp_fade_left" data-fade-from="left">
                        <div class="rekening_service-item mb-30">
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
                        <span class="section-subtitle tp_fade_left">Bahagia Bersama Yatim</span>
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
                                        <a href="#" class="text-decoration-none text-muted">
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
                                        class="text-decoration-none text-dark">
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

</main>


@section('footer')
    <x-footer />
@endsection
