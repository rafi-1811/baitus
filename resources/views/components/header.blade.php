<header class="header-area">
    <div class="header-main header-sticky">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-between">
                <div class="col-xl-2 col-lg-1 col-4">
                    <div class="header-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                alt="Logo"></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                    <div class="header-menu">
                        <nav class="header-nav-menu" id="mobile-menu">
                            <ul class="d-flex justify-content-center">
                                <x-nav-link href="{{ route('home') }}">Beranda</x-nav-link>
                                </li>
                                <li class="menu-has-child">
                                    <a href="#">Program Kami</a>
                                    <ul class="submenu">
                                        @foreach ($staticData['program'] as $item)
                                            <x-nav-link wire:key="{{ $item->slug }}"
                                                href="{{ route('detail-program', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}</x-nav-link>
                                        @endforeach
                                    </ul>
                                </li>
                                <x-nav-link href="{{ route('tentang-kami') }}">Tentang
                                    Kami</x-nav-link>
                                <x-nav-link href="{{ route('berita') }}">Berita</x-nav-link>
                                <x-nav-link href="{{ route('kontak') }}">Kontak</x-nav-link>
                            </ul>
                        </nav>
                    </div>
                </div>

                {{-- tombol --}}
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="header-action-wrap d-flex align-items-center justify-content-end">
                        <div class="button d-none d-xl-block">
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
                        <div class="header-menu-bar d-xl-none">
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
