<header class="header-area">
    <div class="header-main header-sticky">
        <div class="container custom-container-1">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="header-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                alt="Logo"></a>
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
                                                    href="{{ route('detail-program', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('kontak') }}">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="header-action-wrap d-flex align-items-center justify-content-end mr-20">
                        <div class="button">
                            <a href="https://kitabisa.com/campaign/berbagiberassembakoyatim" target="_blank">
                                DONASI DISINI
                                <svg width="79" height="46" viewBox="0 0 79 46" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_f_618_1123)">
                                        <path d="M42.9 2H76.5L34.5 44H2L42.9 2Z" fill="url(#paint0_linear_618_1123)" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_618_1123" x="0" y="0" width="78.5" height="46"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur_618_1123" />
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
