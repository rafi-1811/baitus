    @extends('layout.layout1')

    @section('header')
        <header class="header-area">
            <div class="header-main header-sticky">
                <div class="container custom-container-1">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-6">
                            <div class="header-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                        alt="Image Not Found"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 text-center d-none d-lg-block">
                            <div class="header-menu ">
                                <nav class="header-nav-menu" id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Beranda</a></li>
                                        <li class="menu-has-child">
                                            <a href="#">Program Kami</a>
                                            <ul class="submenu">
                                                @foreach ($staticData['program'] as $item)
                                                    <li>
                                                        <a
                                                            href="{{ route('program-yayasan', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('berita') }}">Berita</a></li>
                                        <li><a href="{{ url('about') }}">Tentang Kami</a></li>
                                        <li><a href="{{ url('kontak') }}">Kontak</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-6">
                            <div class="header-action-wrap d-flex align-items-center justify-content-end mr-20">
                                <div class="button" onClick={console.log("click")}>
                                    <a href="https://kitabisa.com/campaign/berbagiberassembakoyatim" target="_blank">
                                        DONASI DISINI
                                        <svg width="79" height="46" viewBox="0 0 79 46" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_f_618_1123)">
                                                <path d="M42.9 2H76.5L34.5 44H2L42.9 2Z"
                                                    fill="url(#paint0_linear_618_1123)" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_f_618_1123" x="0" y="0" width="78.5" height="46"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                        result="shape" />
                                                    <feGaussianBlur stdDeviation="1"
                                                        result="effect1_foregroundBlur_618_1123" />
                                                </filter>
                                                <linearGradient id="paint0_linear_618_1123" x1="76.5" y1="2.00002"
                                                    x2="34.5" y2="44" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white" stop-opacity="0.6" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0.05" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="header-menu-bar d-lg-none">
                                    <span class="header-menu-bar-icon side-toggle">
                                        <i class="fa-light fa-bars"></i>
                                    </span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endsection

    @section('content')
        <main>
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

            <section class="slider_container">
                @if ($staticData['banner'])
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            @foreach ($staticData['banner'] as $index => $item)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                    aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-label="Slide {{ $index + 1 }}">
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


            <!-- banner area start -->
            <section class="banner-area">
                <div class="container custom-container-1">
                    <div class="banner-single">
                        <div class="banner-img tp_fade_left">
                            <img src="{{ asset('assets/images/banner/home1/home.jpg') }}" alt="Image Not Found">
                        </div>
                        <div class="banner-content">
                            <span class="banner-content-subtitle tp_fade_left">Bahagia Bersama Yatim</span>
                            <h1 class="banner-content-title tp_has_text_reveal_anim">Yayasan Baitus Saadah Amanah</h1>
                            <p class="tp_desc_anim">Yayasan Baitus Saadah Amanah merupakan lembaga sosial yang berdiri
                                sejak April tahun 2021.
                                Tujuan utama yayasan ini berdiri yaitu, untuk membantu dan memajukan kehidupan anak-anak
                                yatim dengan
                                program yang efektif dan berkesinambungan untuk kehidupan yang lebih baik. Hingga sekarang,
                                kami memiliki kantor representatif. dan penambahan logo baru dengan slogan <b>"Bahagia
                                    Bersama Yatim".</b>
                            <p class="tp_desc_anim"><br>Sekretariat : Jl. Pendowo Raya Gg. Kopo Limo Kota Depok - Jawa
                                Barat 16515 / Telp. 0813 7790 5741 — Nomor AHU-0011002.AH.01.04.Tahun 2021</p>
                            </p>
                        </div>
                    </div>
                </div>

            </section>
            <!-- banner area end -->

            <!-- choose area start -->
            <section class="choose-area pt-140">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="section-area text-center mb-50">
                                <span class="section-subtitle tp_fade_left">Bahagia Bersama Yatim</span>
                                <h2 class="section-title tp_title_slideup mb-0">Program Kami</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if ($staticData['program'])
                            @foreach ($staticData['program'] as $item)
                                <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left">
                                    <div class="choose-item mb-30">
                                        <div class="choose-item-img">
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image Not Found">
                                        </div>
                                        <div class="choose-item-content">
                                            <h5 class="choose-item-content-title"><a
                                                    href="#">{{ $item->kategori_program }}</a></h5>
                                            <p>{{ $item->deskripsi }}</p>
                                            <a href="{{ route('program-yayasan', ['slug' => $item->slug]) }}"
                                                class="choose-item-content-btn">Selengkapnya<i
                                                    class="fa-light fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".8">
                                <div class="choose-item mb-30">
                                    <div class="choose-item-img">
                                        <img src="{{ Storage::url($program->gambarberita2) }}" alt="Image Not Found">
                                    </div>
                                    <div class="choose-item-content">
                                        <h5 class="choose-item-content-title"><a
                                                href="#">{{ $program->judul2 }}</a></h5>
                                        <p>{{ $program->keterangan2 }}</p>
                                        <a href="#" class="choose-item-content-btn">Selengkapnya<i
                                                class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.1">
                                <div class="choose-item mb-30">
                                    <div class="choose-item-img">
                                        <img src="{{ Storage::url($program->gambarberita3) }}" alt="Image Not Found">
                                    </div>
                                    <div class="choose-item-content">
                                        <h5 class="choose-item-content-title"><a
                                                href="#">{{ $program->judul3 }}</a></h5>
                                        <p>{{ $program->keterangan3 }}</p>
                                        <a href="#" class="choose-item-content-btn">Selengkapnya<i
                                                class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.3">
                                <div class="choose-item mb-30">
                                    <div class="choose-item-img">
                                        <img src="{{ Storage::url($program->gambarberita4) }}" alt="Image Not Found">
                                    </div>
                                    <div class="choose-item-content">
                                        <h5 class="choose-item-content-title"><a
                                                href="#">{{ $program->judul4 }}</a></h5>
                                        <p>{{ $program->keterangan4 }}</p>
                                        <a href="#" class="choose-item-content-btn">Selengkapnya<i
                                                class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.3">
                                <div class="choose-item mb-30">
                                    <div class="choose-item-img">
                                        <img src="{{ Storage::url($program->gambarberita5) }}" alt="Image Not Found">
                                    </div>
                                    <div class="choose-item-content">
                                        <h5 class="choose-item-content-title"><a
                                                href="#">{{ $program->judul5 }}</a></h5>
                                        <p>{{ $program->keterangan5 }}</p>
                                        <a href="#" class="choose-item-content-btn">Selengkapnya<i
                                                class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.3">
                                <div class="choose-item mb-30">
                                    <div class="choose-item-img">
                                        <img src="{{ Storage::url($program->gambarberita6) }}" alt="Image Not Found">
                                    </div>
                                    <div class="choose-item-content">
                                        <h5 class="choose-item-content-title"><a
                                                href="#">{{ $program->judul6 }}</a></h5>
                                        <p>{{ $program->keterangan6 }}</p>
                                        <a href="#" class="choose-item-content-btn">Selengkapnya<i
                                                class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.3">
                                <div class="choose-item mb-30">
                                    <div class="choose-item-img">
                                        <img src="{{ Storage::url($program->gambarberita7) }}" alt="Image Not Found">
                                    </div>
                                    <div class="choose-item-content">
                                        <h5 class="choose-item-content-title"><a
                                                href="#">{{ $program->judul7 }}</a></h5>
                                        <p>{{ $program->keterangan7 }}</p>
                                        <a href="#" class="choose-item-content-btn">Selengkapnya<i
                                                class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.3">
                                <div class="choose-item mb-30">
                                    <div class="choose-item-img">
                                        <img src="{{ Storage::url($program->gambarberita8) }}" alt="Image Not Found">
                                    </div>
                                    <div class="choose-item-content">
                                        <h5 class="choose-item-content-title"><a
                                                href="#">{{ $program->judul8 }}</a></h5>
                                        <p>{{ $program->keterangan8 }}</p>
                                        <a href="#" class="choose-item-content-btn">Selengkapnya<i
                                                class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                        @else
                            <p>Prgoram belum ditetapkan.</p>
                        @endif
                    </div>
                </div>
            </section>
            <!-- choose area end -->

            <!-- visi misi area start -->
            <section class="feature-area pt-110 pb-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="section-area text-center mb-50">
                                <span class="section-subtitle tp_fade_left">Bahagia Bersama Yatim</span>
                                <h2 class="section-title tp_title_slideup mb-0">Visi & Misi</h2>
                            </div>
                        </div>
                    </div>
                    <div class="feature-top mb-50 tp_fade_bottom">
                        @if ($visiMisi)
                            <div class="feature-item">
                                <h5 class="feature-item-title">Visi</h5>
                                <p>{{ $visiMisi->visi }}</p>
                            </div>
                            <div class="feature-item1 ">
                                <h5 class="feature-item-title">Misi</h5>
                                {!! $visiMisi->misi !!}
                            </div>
                        @else
                            <p>Visi Misi belum ditetapkan.</p>
                        @endif
                    </div>
                </div>
            </section>
            <!-- feature area end -->

            {{-- < Animasi Angka > --}}
            <section class="h4_feature-area pt-80 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8">
                            <div class="h4_section-area text-center mb-50">
                                <span class="section-subtitle tp_fade_left">Bahagia Bersama Yatim</span>
                                <h2 class="h4_section-title tp_title_slideup mb-0">Mari Bersama Tebarkan Kebaikan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 tp_has_fade_anim" data-fade-from="left">
                            <div class="h4_feature-item mb-30">
                                <div class="h4_feature-item-img">
                                    <img src="{{ asset('assets/images/feature/home4/baksos.jpg') }}" alt="">
                                </div>
                                <div class="counter" data-target="120">0</div>
                                <div class="h4_feature-item-content">
                                    <h4 class="h4_feature-item-content-title">Yatim Binaan</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 tp_has_fade_anim" data-fade-from="left" data-delay=".4">
                            <div class="h4_feature-item mb-30">
                                <div class="h4_feature-item-img">
                                    <img src="{{ asset('assets/images/feature/home4/baksos.jpg') }}" alt="">
                                </div>
                                <div class="counter" data-target="400">0</div>
                                <div class="h4_feature-item-content">
                                    <h4 class="h4_feature-item-content-title">Yatim Luar Binaan</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 tp_has_fade_anim" data-fade-from="left" data-delay=".6">
                            <div class="h4_feature-item mb-30">
                                <div class="h4_feature-item-img">
                                    <img src="{{ asset('assets/images/feature/home4/baksos.jpg') }}" alt="">
                                </div>
                                <div class="counter" data-target="68">0</div>
                                <div class="h4_feature-item-content">
                                    <h4 class="h4_feature-item-content-title">Total Kegiatan</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 tp_has_fade_anim" data-fade-from="left" data-delay=".8">
                            <div class="h4_feature-item mb-30">
                                <div class="h4_feature-item-img">
                                    <img src="{{ asset('assets/images/feature/home4/baksos.jpg') }}" alt="">
                                </div>
                                <div class="counter" data-target="10">0</div>
                                <div class="h4_feature-item-content">
                                    <h4 class="h4_feature-item-content-title">Cakupan Daerah</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Rekening --}}
            <section class="rekening-area pt-110 pb-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-xl-6 col-lg-6 col-md-8">
                            <div class="h4_section-area text-center mb-25">
                                <span class="section-subtitle tp_fade_left">Bahagia Bersama Yatim</span>
                                <h2 class="h4_section-title tp_title_slideup mb-0">Rekening Donasi</h2>
                                <p>Salurkan Bantuan Anda untuk Masa Depan Anak Yatim yang Lebih Cerah.
                                    Setiap Rupiah Membawa Harapan dan Kebahagiaan bagi Mereka yang Membutuhkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if ($rekening)
                            <div class="col-xl-3 col-lg-4 col-md-3 tp_fade_left" data-fade-from="left">
                                <div class="rekening_service-item mb-30">
                                    <div class="rekening_service-item-icon">
                                        <img src="{{ Storage::url($rekening->imagebank1) }}" alt="Gambar">
                                    </div>
                                    <h5 class="rekening_service-item-title">{{ $rekening->nomorbank1 }}</h5>
                                    <p>a.n Yayasan Baitus Sa'adah Amanah</p>
                                    {{-- <a href="{{ url('#') }}" class="rekening_service-item-btn">Learn More<i class="fa-light fa-angle-right"></i></a> --}}
                                </div>

                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-3 tp_fade_left" data-fade-from="left" data-delay=".8">
                                <div class="rekening_service-item mb-30 ">
                                    <div class="rekening_service-item-icon">
                                        <img src="{{ Storage::url($rekening->imagebank2) }}" alt="Gambar">
                                    </div>
                                    <h5 class="rekening_service-item-title">{{ $rekening->nomorbank2 }}</h5>
                                    <p>a.n Yayasan Baitus Sa'adah Amanah</p>
                                    {{-- <a href="{{ url('#') }}" class="h3_service-item-btn">Learn More<i class="fa-light fa-angle-right"></i></a> --}}
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-3 tp_fade_left" data-fade-from="left" data-delay="1.1">
                                <div class="rekening_service-item mb-30">
                                    <div class="rekening_service-item-icon">
                                        <img src="{{ Storage::url($rekening->imagebank3) }}" alt="Gambar">
                                    </div>
                                    <h5 class="rekening_service-item-title">{{ $rekening->nomorbank3 }}</h5>
                                    <p>a.n Yayasan Baitus Sa'adah Amanah</p>
                                    {{-- <a href="{{ url('#') }}" class="rekening_service-item-btn">Learn More<i class="fa-light fa-angle-right"></i></a> --}}
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-3 tp_fade_left" data-fade-from="left" data-delay="1.3">
                                <div class="rekening_service-item mb-30">
                                    <div class="rekening_service-item-icon">
                                        <img src="{{ Storage::url($rekening->imagebank4) }}" alt="Gambar">
                                    </div>
                                    <h5 class="rekening_service-item-title">{{ $rekening->nomorbank4 }}</h5>
                                    <p>a.n Yayasan Baitus Sa'adah Amanah</p>
                                    {{-- <a href="{{ url('#') }}" class="rekening_service-item-btn">Learn More<i class="fa-light fa-angle-right"></i></a> --}}
                                </div>
                            </div>
                        @else
                            <p>Rekening belum ditetapkan.</p>
                        @endif
                    </div>

                    <div class="md-1" data-fade-from="left" data-delay=".8">
                        <div class="rekening_service-item1 mb-30">
                            <div class="rekening_service-item1-icon">
                                <img src="{{ asset('assets/images/rekening/qris.png') }}" alt="">
                            </div>
                            <h5 class="rekening_service-item1-title">Qris</h5>
                            <p>a.n Yayasan Baitus Sa'adah Amanah</p>
                            {{-- <a href="{{ url('#') }}" class="rekening_service-item-btn">Learn More<i class="fa-light fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </section>



            <!-- blog area start -->
            <section class="h21_blog-area pt-105 pb-140">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="section-area text-center mb-50">
                                <span class="section-subtitle tp_fade_left">bahagia Bersama Yatim</span>
                                <h2 class="section-title tp_title_slideup mb-0">Berita Terbaru</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper h2_blog-active">
                        <div class="swiper-wrapper tp_fade_bottom">
                            <div class="swiper-slide">
                                <div class="h2_blog-item">
                                    <div class="h2_blog-img w_img mb-35">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ asset('assets/images/blog/home2/santunan.jpg') }}"
                                                alt="Image Not Found"></a>
                                    </div>
                                    <div class="h2_blog-content">
                                        <div class="h2_blog-content-meta">
                                            <span><a href="#">Program Santunan</a></span>
                                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                                        </div>
                                        <h4 class="h2_blog-content-title">
                                            <a href="{{ url('blog-details') }}">Santunan 120 Adik Yatim</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h2_blog-item">
                                    <div class="h2_blog-img w_img mb-35">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ asset('assets/images/blog/home2/wisata.jpg') }}"
                                                alt="Image Not Found"></a>
                                    </div>
                                    <div class="h2_blog-content">
                                        <div class="h2_blog-content-meta">
                                            <span><a href="#">Program Wisata</a></span>
                                            <span><i class="fa-light fa-calendar-days"></i>June 18, 2024</span>
                                        </div>
                                        <h4 class="h2_blog-content-title">
                                            <a href="{{ url('blog-details') }}">Wisata Adik Yatim</a>
                                            <br>
                                            <a href="{{ url('blog-details') }}">Putri Duyung | Depok</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h2_blog-item">
                                    <div class="h2_blog-img w_img mb-35">
                                        <a href="{{ url('blog-details') }}"><img
                                                src="{{ asset('assets/images/blog/home2/belanja.jpg') }}"
                                                alt="Image Not Found"></a>
                                    </div>
                                    <div class="h2_blog-content">
                                        <div class="h2_blog-content-meta">
                                            <span><a href="#">Program Belanja</a></span>
                                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                                        </div>
                                        <h4 class="h2_blog-content-title">
                                            <a href="{{ url('blog-details') }}">Belanja Bersama Adik Yatim</a>
                                            <br>
                                            <a href="{{ url('blog-details') }}">Pasadena | Depok</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h2_blog-pagination text-center pt-50"></div>
                    </div>
                </div>
            </section>
            <!-- blog area end -->

            <!-- brand area start -->
            {{-- <section class="brand-area pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
                        <div class="section-area text-center mb-50">
                            <h2 class="section-title tp_title_slideup mb-0">Trusted by 20,000+
                                Marketing Departments.</h2>
                        </div>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/1.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/2.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/3.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/4.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/5.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/6.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/7.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/8.png') }}" alt="Image Not Found">
                    </div>
                    <div class="brand-item tp_fade_bottom">
                        <img src="{{ asset('assets/images/brand/9.png') }}" alt="Image Not Found">
                    </div>
                </div>
            </div>
        </section> --}}
            <!-- brand area end -->
        </main>
    @endsection

    @section('footer')
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top pt-95 pb-55 pl-15 pr-15">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-lg-4 tp_has_fade_anim" data-fade-from="left">
                            <div class="footer-left mb-50">
                                <div class="footer1">
                                    <div class="footer-logo">
                                        <a href="{{ url('index') }}"><img
                                                src="{{ asset('assets/images/logo/logo.png') }}"
                                                alt="Image Not Found"></a>
                                    </div>
                                    <h1 class="footer-nama tp_has_text_reveal_anim">Yayasan Baitus Saadah Amanah</h1>
                                </div>
                                <div class="footer-newsletter">
                                    <p> Kami berharap masyarakat dapat terus berkontribusi untuk membantu kami dalam
                                        memberikan
                                        yang terbaik kepada yang membutuhkan, mulai dari Rp10.000 anda sudah dapat ikut
                                        serta membantu
                                        dan berdonasi di Yayasan Baitus Saadah Amanah.
                                        Semoga Allah SWT membalas kebaikan kita semua, Aamiin ya rabbal’alamin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 tp_has_fade_anim" data-fade-from="right" data-delay=".8">
                            <div class="footer-right mb-10">
                                {{-- <h3 class="footer-right-title">AI Art Tips From The Finest Doodle Artists.</h3> --}}
                                <div class="footer-widget-wrap">
                                    <div class="footer-widget mb-40">
                                        <h5>Sosial Media</h5>
                                        <ul>
                                            <li><a
                                                    href="https://www.instagram.com/yayasanbaitussaadahamanah_?igsh=MWdveXU2YzBjeHNhOA==">Instagram</a>
                                            </li>
                                            <li><a href="#">Facebook</a></li>
                                            <li><a
                                                    href="http://www.youtube.com/@yayasanbaitussaadahamanaho8517">Youtube</a>
                                            </li>
                                            <li><a href="twitter.com/Baitussaadah_">Twitter</a></li>
                                            <li><a href="tiktok.com/@yayasanbaitussaadahamah">Tiktok</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-widget mb-40">
                                        <h5>Menu</h5>
                                        <ul>
                                            <li><a href="blog">Berita</a></li>
                                            <li><a href="#">Tentang Kami</a></li>
                                            <li><a href="caontact">Kontak</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-widget mb-40">
                                        <h5>Kontak</h5>
                                        <ul>
                                            {{-- <li><a href="mailto:example@gmail.com">example@gmail.com</a></li> --}}
                                            <li><a href="tel:+62812-1007-9178">0812 1007 9178</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom tp_fade_bottom_footer">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="footer-bottom-copyright d-flex justify-content-center justify-content-md-start">
                                <p>&copy; 2024 Baitus Saadah Amanah. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="footer-bottom-menu d-flex justify-content-center justify-content-md-end">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Term of Service</a></li>
                            </ul>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    @endsection
