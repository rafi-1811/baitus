
                    {{-- <div class="h5_header-top d-sm-flex align-items-center d-none">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="h5_header-top-text">
                                        <p>Create an account to avail a 34% bonus discount at checkout.</p>
                                        <a href="#">Learn More<i class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                                    <div class="h5_header-top-right">
                                        <div class="h5_header-top-language">
                                            <select name="select" class="h5_header-top-language-option has-nice-select">
                                                <option value="1">English</option>
                                                <option value="2">Bangla</option>
                                                <option value="3">Arabic</option>
                                                <option value="4">Urdu</option>
                                            </select>
                                        </div>
                                        <div class="h5_header-top-currency">
                                            <select name="select" class="h5_header-top-currency-option has-nice-select">
                                                <option value="1">$USD</option>
                                                <option value="2">৳Taka</option>
                                                <option value="3">€Euro</option>
                                            </select>
                                        </div>
                                        <div class="h5_header-top-account">
                                            <a href="#">
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.0127 8C8.94569 8 10.5127 6.433 10.5127 4.5C10.5127 2.567 8.94569 1 7.0127 1C5.0797 1 3.5127 2.567 3.5127 4.5C3.5127 6.433 5.0797 8 7.0127 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13.026 15C13.026 12.291 10.331 10.1 7.013 10.1C3.695 10.1 1 12.291 1 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                My Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="h5_header-bottom header-sticky">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-2 col-lg-2 col-4">
                                    <div class="h5_header-logo">
                                        <a href="{{ url('index') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Image Not Found"></a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 d-none d-lg-block text-center">
                                    <div class="h5_header-menu ">
                                        <nav class="h5_header-nav-menu" id="mobile-menu">
                                            <ul>
                                                <li class="menu-has-child">
                                                    <a href="{{ url('index') }}">Home</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('index') }}">AI Doodle</a></li>
                                                        <li><a href="{{ url('index-2') }}">AI Co-Pilot</a></li>
                                                        <li><a href="{{ url('index-3') }}">AI Image Generator</a></li>
                                                        <li><a href="{{ url('index-4') }}">AI Text Generator</a></li>
                                                        <li><a href="{{ url('index-5') }}">AI Photostock</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('about') }}">About</a></li>
                                                <li class="menu-has-child">
                                                    <a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('service') }}">Services</a></li>
                                                        <li><a href="{{ url('team') }}">Team</a></li>
                                                        <li><a href="{{ url('work') }}">Portfolio</a></li>
                                                        <li><a href="{{ url('price') }}">Pricing</a></li>
                                                        <li><a href="{{ url('faq') }}">FAQ's</a></li>
                                                        <li><a href="{{ url('testimonial') }}">Testimonials</a></li>
                                                        <li><a href="{{ url('wishlist') }}">Wishlist</a></li>
                                                        <li><a href="{{ url('cart') }}">Cart</a></li>
                                                        <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                                        <li><a href="{{ url('login') }}">Login</a></li>
                                                        <li><a href="{{ url('404') }}">404</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-has-child">
                                                    <a href="{{ url('shop') }}">Shop</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('shop') }}">Shop</a></li>
                                                        <li><a href="{{ url('shop-details') }}">Shop Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-has-child">
                                                    <a href="{{ url('blog') }}">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('blog') }}">Blog</a></li>
                                                        <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('contact') }}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-8">
                                    <div class="h5_header-action-wrap d-flex align-items-center justify-content-end">
                                        <div class="h5_header-action d-none d-sm-flex">
                                            <div class="h5_header-action-inner">
                                                <a class="h5_header-action-search" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#search-modal"><i class="fa-light fa-search"></i></a>
                                                <a href="{{ url('cart') }}" class="h5_header-action-cart"><i class="fa-light fa-shopping-bag"></i><span>12</span></a>
                                            </div>
                                            <a href="#" class="h5_header-action-btn">
                                                Get Started<i class="fa-light fa-angle-right"></i>                                
                                            </a>
                                        </div>
                                        <div class="header-menu-bar d-lg-none ml-10">
                                            <span class="header-menu-bar-icon side-toggle">
                                                <i class="fa-light fa-bars"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <header class="header-area">
                        <div class="header-main header-sticky">
                            <div class="container custom-container-1">
                                <div class="row align-items-center">
                                    <div class="col-xl-2 col-lg-2 col-6">
                                        <div class="header-logo">
                                            <a href="{{ url('index') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Image Not Found"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 text-center d-none d-lg-block">
                                        <div class="header-menu ">
                                            <nav class="header-nav-menu" id="mobile-menu">
                                                <ul>
                                                    <li><a href="{{ url('index') }}">Beranda</a></li>
                                                    <li class="menu-has-child">
                                                        <a href="#">Program Kami</a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ url('program-santunan') }}">Program Santunan</a></li>
                                                            <li><a href="{{ url('program-pendidikan') }}">Program Pendidikan</a></li>
                                                            <li><a href="{{ url('program-baktisosial') }}">Program Bakti Sosial</a></li>
                                                            <li><a href="{{ url('program-makan-bersama') }}">Program Makan Bersama</a></li>
                                                            <li><a href="{{ url('program-belanja') }}">Program Belanja Yatim</a></li>
                                                            <li><a href="{{ url('program-wisata') }}">Program Wisata Yatim</a></li>
                                                            <li><a href="{{ url('program-jajan') }}">Program Jajan Yatim</a></li>
                                                            <li><a href="{{ url('program-sembako') }}">Program Sembako</a></li>
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
                                            <div class="button" onClick={console.log("click")} >
                                                <a href="https://kitabisa.com/campaign/berbagiberassembakoyatim" target="_blank">
                                                DONASI DISINI
                                                <svg width="79" height="46" viewBox="0 0 79 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_f_618_1123)">
                                                  <path d="M42.9 2H76.5L34.5 44H2L42.9 2Z" fill="url(#paint0_linear_618_1123)"/>
                                                </g>
                                                <defs>
                                                  <filter id="filter0_f_618_1123" x="0" y="0" width="78.5" height="46" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                                    <feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur_618_1123"/>
                                                  </filter>
                                                  <linearGradient id="paint0_linear_618_1123" x1="76.5" y1="2.00002" x2="34.5" y2="44" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white" stop-opacity="0.6"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.05"/>
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