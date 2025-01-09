@extends('layout.layout')

<?php
$title = 'Berita';
$subTitle = 'Home';
?>

@section('content')
    <div class="container1">
        <div class="content1">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="h211_section-area text-center mb-50">
                        <h2 class="h21_section-title">Berita</h2>
                    </div>
                </div>
            </div>

            {{-- @php
                dd($berita);
            @endphp --}}

            {{-- mulai Berita --}}
            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left">
                        <div class="h2_blog-item mb-35">
                            <a href="{{ route('detail-berita', ['slug' => $item->slug]) }}">
                                <div class="h2_blog-img w_img mb-25">
                                    <img src="{{ asset('storage/' . $item->cover_gambar_berita) }}"
                                        alt="gambar {{ $item->kategori }}">
                                </div>
                            </a>
                            <div class="h2_blog-content">
                                <div class="h2_blog-content-meta">
                                    <span>{{ $item->kategori }}</span>
                                    <span><i
                                            class="fa-light fa-calendar-days"></i>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                </div>
                                <h4 class="h2_blog-content-title">
                                    <a href="{{ route('detail-berita', ['slug' => $item->slug]) }}">
                                        {{ $item->judul }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div>{{ $berita->links() }}</div> --}}
            </div>
            {{-- batas Berita --}}
            <div class="row">
                <div class="col-10">
                    <div class="pagination-area pt-30 d-flex justify-content-center tp_fade_bottom">
                        <span><i class="fa-light fa-arrow-left"></i></span>
                        <ul>
                            <li><a href="#" class="active">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#">05</a></li>
                        </ul>
                        <span><i class="fa-light fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="sidebar1">
            <h6>Kategori Program</h6>
            <ul class="space-y-2">
                @foreach ($staticData['program'] as $item)
                    <li class="border-b-2 py-0.5">
                        <a href="{{ route('detail-berita', ['slug' => $item->slug]) }}"
                            class="flex justify-between items-center text-blue-600">
                            <span
                                class="text-gray-600 hover:text-gray-800 font-roboto text-sm">{{ $item->kategori_program }}
                                ({{ $item->berita->count() }})
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <footer class="footer-area1">
        <div class="container">
            <div class="footer-top pt-95 pb-55 ml-10 mr-10">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-4 tp_has_fade_anim" data-fade-from="left">
                        <div class="footer-left mb-50">
                            <div class="footer1">
                                <div class="footer-logo">
                                    <a href="{{ url('index') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
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
                            {{-- <h3 class="footer-right-title">AI Art Tips From The Finest Doodle Artists.</h3> --}}
                            <div class="footer-widget-wrap">
                                <div class="footer-widget mb-40">
                                    <h5>Sosial Media</h5>
                                    <ul>
                                        <li><a
                                                href="https://www.instagram.com/yayasanbaitussaadahamanah_?igsh=MWdveXU2YzBjeHNhOA==">Instagram</a>
                                        </li>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="http://www.youtube.com/@yayasanbaitussaadahamanaho8517">Youtube</a>
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
