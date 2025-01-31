{{-- Kalo mau ubah footer lama uncomment ini aja --}}
<footer class="footer-area">
    <div class="container">
        <div class="footer-top">
            <div class="row justify-content-between">
                <div class="footer-left col-xl-5 col-lg-4 tp_has_fade_anim" data-fade-from="left">
                    <div class="footer1">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                    alt="Image Not Found"></a>
                        </div>
                        <h1 class="footer-nama">Yayasan Baitus Saadah Amanah</h1>
                    </div>
                    <div class="footer-newsletter">
                        <p> Kami berharap masyarakat dapat terus berkontribusi untuk membantu kami dalam memberikan
                            yang terbaik kepada yang membutuhkan, mulai dari Rp10.000 anda sudah dapat ikut serta
                            membantu
                            dan berdonasi di Yayasan Baitus Saadah Amanah.
                            Semoga Allah SWT membalas kebaikan kita semua, Aamiin ya rabbal’alamin.</p>
                    </div>
                    <div class="h5_footer-widget-social">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-right col-xl-6 col-lg-7 tp_has_fade_anim" data-fade-from="right" data-delay=".8">
                    <div class="footer-widget-wrap">
                        <div class="footer-widget">
                            <h5 class="footer-widget-title">Sosial Media</h5>
                            <ul>
                                @forelse ($staticData['sosial_media'] as $item)
                                    <li><a href="{{ $item->link_sosial_media }}">{{ $item->nama_sosial_media }}</a>
                                    </li>
                                @empty
                                    <li class="text-danger">Belum ada sosial media</li>
                                @endforelse
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h5 class="footer-widget-title">Menu</h5>
                            <ul>
                                <li><a wire:navigate href="{{ route('home') }}">Beranda</a></li>
                                <li><a wire:navigate href="{{ route('berita') }}">Berita</a></li>
                                <li><a wire:navigate href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                                <li><a wire:navigate href="{{ route('kontak') }}">Kontak</a></li>
                                <li><a wire:navigate href="#">Donasi</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h5 class="footer-widget-title">Kontak</h5>

                            <ul>
                                <li>
                                    Jl.Pendowo Raya Gg. Kopo Kel. Limo Kec. Limo, Kota Depok,Jawa Barat 16515
                                </li>
                                {{-- <li>officialbaitussaadahamanah@gmail.com</li> --}}
                                <li>0821-2477-1471</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom tp_fade_bottom_footer">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="footer-bottom-copyright d-flex justify-content-center justify-content-md-start">
                        <p>&copy; 2024 Baitus Saadah Amanah. Semua hak cipta dilindungi.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-menu d-flex justify-content-center justify-content-md-end">
                        <ul>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Kewajiban Pengguna</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
