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
                        <a href="https://x.com/Baitussaadah_"><i class="fa-brands fa-x"></i></a>
                        <a href="https://www.instagram.com/yayasanbaitussaadahamanah_/?igsh=MWdveXU2YzBjeHNhOA%3D%3D#"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/baitus.a.yatim"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://youtube.com/@yayasanbaitussaadahamanaho8517?si=6I2xtsKqztSoAMLD"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-right col-xl-6 col-lg-7 tp_has_fade_anim" data-fade-from="right" data-delay=".8">
                    <div class="footer-widget-wrap">
                        <div class="footer-widget">
                            <h5 class="footer-widget-title">Sosial Media</h5>
                            <ul>
                                @forelse ($staticData['sosial_media'] as $item)
                                    <li wire:key="{{ $item->id }}"><a
                                            href="{{ $item->link_sosial_media }}">{{ $item->nama_sosial_media }}</a>
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
                                    {{ $staticData['kontak']->alamat ?? 'Jl.Pendowo Raya Gg. Kopo Kel. Limo Kec. Limo, Kota Depok,Jawa Barat 16515' }}
                                </li>
                                <li class="text-clamp-2">
                                    {{ $staticData['kontak']->email ?? 'officialyayasan@baitussaadahamanah.org' }}</li>
                                <li>{{ $staticData['kontak']->whatsapp ?? '081210079178' }}</li>
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
                        <p>&copy; {{ date('Y') }} Baitus Saadah Amanah. Semua hak cipta dilindungi.</p>
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
