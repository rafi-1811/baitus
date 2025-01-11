{{-- Kalo mau ubah footer lama uncomment ini aja --}}

{{-- <footer class="footer-area">
    <div class="container">
        <div class="footer-top pt-95 pb-55 pl-15 pr-15">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-4 tp_has_fade_anim" data-fade-from="left">
                    <div class="footer-left mb-50">
                        <div class="footer1">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                        alt="Image Not Found"></a>
                            </div>
                            <h1 class="footer-nama tp_has_text_reveal_anim">Yayasan Baitus Saadah Amanah</h1>
                        </div>
                        <div class="footer-newsletter">
                            <p> Kami berharap masyarakat dapat terus berkontribusi untuk membantu kami dalam memberikan
                                yang terbaik kepada yang membutuhkan, mulai dari Rp10.000 anda sudah dapat ikut serta
                                membantu
                                dan berdonasi di Yayasan Baitus Saadah Amanah.
                                Semoga Allah SWT membalas kebaikan kita semua, Aamiin ya rabbal’alamin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 tp_has_fade_anim" data-fade-from="right" data-delay=".8">
                    <div class="footer-right mb-10">
                        <div class="footer-widget-wrap">
                            <div class="footer-widget mb-40">
                                <h5>Sosial Media</h5>
                                <ul>
                                    @foreach ($staticData['sosial_media'] as $item)
                                        <li>
                                            <a href="{{ $item->link_sosial_media }}">{{ $item->nama_sosial_media }}</a>
                                        </li>
                                    @endforeach
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
                    <div class="footer-bottom-menu d-flex justify-content-center justify-content-md-end">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}

{{-- ini footer buatan gua --}}
<footer class="h5_footer-area">
    <div class="h5_footer-top pt-120 pb-80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-3 col-md-5 col-sm-7 tp_has_fade_anim" data-fade-from="left">
                    <div class="h5_footer-widget mb-40">
                        <div class="row mb-20 mb-lg-30">
                            <div class="col-xl-3">
                                <div class="h5_footer-logo">
                                    <a href="{{ url('index') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div style="font-size: 22px; color: sandybrown;"
                                class="col-xl-9 d-flex align-items-center tp_has_text_reveal_anim section-title">
                                Yayasan Baitus Saadah Amanah
                            </div>

                        </div>

                        <p class="h5_footer-widget-text">Kami berharap masyarakat dapat terus berkontribusi untuk
                            membantu kami dalam memberikan yang terbaik kepada yang membutuhkan, mulai dari Rp10.000
                            anda sudah dapat ikut serta membantu dan berdonasi di Yayasan Baitus Saadah Amanah. Semoga
                            Allah SWT membalas kebaikan kita semua, Aamiin ya rabbal’alamin.</p>
                        <div class="h5_footer-widget-social">
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 tp_has_fade_anim" data-fade-from="left" data-delay=".8">
                    <div class="h5_footer-widget mb-35">
                        <h5 class="h5_footer-widget-title">Menu</h5>
                        <ul>
                            <li><a href="{{ route('home') }}">Beranda</a></li>
                            <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                            <li><a href="{{ route('berita') }}">Berita</a></li>
                            <li><a href="{{ route('kontak') }}">Kontak</a></li>
                            <li><a href="{{ url('about') }}">Donasi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 d-flex justify-content-lg-center justify-content-xl-start order-sm-3 order-md-2 tp_has_fade_anim"
                    data-fade-from="left" data-delay="1.1">
                    <div class="h5_footer-widget mb-35">
                        <h5 class="h5_footer-widget-title">Sosial Media</h5>
                        <ul>
                            @foreach ($staticData['sosial_media'] as $item)
                                <li><a href="{{ $item->link_sosial_media }}">{{ $item->nama_sosial_media }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 d-flex justify-content-lg-center justify-content-xl-start order-sm-3 order-md-2 tp_has_fade_anim"
                    data-fade-from="left" data-delay="1.1">
                    <div class="h5_footer-widget mb-35">
                        <h5 class="h5_footer-widget-title">Hubungi Kami</h5>
                        <ul>
                            <li><a href="{{ url('team') }}">{{ $staticData['kontak']->alamat }}</a></li>
                            <li><a href="{{ url('contact') }}">Telepon: {{ $staticData['kontak']->telepon }}</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Email : {{ $staticData['kontak']->email }}</a></li>
                            <li><a href="{{ url('faq') }}">Whatsapp : {{ $staticData['kontak']->whatsapp }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h5_footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-md-6">
                    <div
                        class="h5_footer-bottom-copyright text-center d-flex justify-content-center justify-content-md-start">
                        <p>&copy; 2023 Doodle All Rights Reserved by site</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
