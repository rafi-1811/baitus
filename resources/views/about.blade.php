@extends('layout.layout')

<?php
    $title = 'Tentang Kami';
    $subTitle = 'Beranda';
?>

@section('content')

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
                                <a href="" class="choose-item-content-btn">Selengkapnya<i
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


    <!-- blog area end -->



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

