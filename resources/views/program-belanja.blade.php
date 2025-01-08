@extends('layout.layout')

<?php
    $title = 'Program Belanja Yatim';
    $subTitle = 'Home';
?>

@section('content')
<div class="container1">
    <div class="content1">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="h2_section-area text-center mb-50">
                    <h2 class="h21_section-title mb-0">Program Belanja Yatim</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" >
                <div class="h2_blog-item mb-35">
                    <div class="h21_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/belanja.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Santunan</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">How to choose the right line an app development?</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".4">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/wisata.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Makan Bersama</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>June 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">AI Content Creation Tools: 7 Tools to Supercharge Pro.</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".6">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/santunan.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Pendidikan</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">Innovative Developments in AI Chatbot Technologies</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".8">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/wisata.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Jajan Yatim</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">How to choose the right line an app development?</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/belanja.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Wisata</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>June 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">AI Content Creation Tools: 7 Tools to Supercharge Pro.</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.2">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/belanja.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Bakti Sosial</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">Innovative Developments in AI Chatbot Technologies</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.4">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/wisata.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Sembako Mingguan</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">How to choose the right line an app development?</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.6">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/wisata.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Belanja Yatim</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>June 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">AI Content Creation Tools: 7 Tools to Supercharge Pro.</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.8">
                <div class="h2_blog-item mb-35">
                    <div class="h2_blog-img w_img mb-25">
                        <a href="{{ url('blog-details') }}"><img src="{{ asset('assets/images/blog/home2/belanja.jpg') }}" alt="Image Not Found"></a>
                    </div>
                    <div class="h2_blog-content">
                        <div class="h2_blog-content-meta">
                            <span><a href="#">Program Santunan</a></span>
                            <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                        </div>
                        <h4 class="h2_blog-content-title">
                            <a href="{{ url('blog-details') }}">Innovative Developments in AI Chatbot Technologies</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pagination-area pt-30 d-flex justify-content-center tp_fade_bottom">
                    <span><i class="fa-light fa-arrow-left"></i></span>
                        <ul>
                            <li><a href="#" class="active">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#">05</a></li>
                            <li><a href="#">06</a></li>
                            <li><a href="#">07</a></li>
                        </ul>
                    <span><i class="fa-light fa-arrow-right"></i></span>
                </div>
            </div>
        </div> 
        </div>
        <div class="sidebar1">
            <h6>Kategori Program</h6>
            <ul class="space-y-2">
                <li class="border-b-2 py-0.5">
                <a href="/program/program-1000-anak-yatim" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Santuanan (4)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(4)</span> --}}
                </a>
                </li>
                <li class="border-b-2 py-0.5">
                <a href="/program/program-bakti-sosial" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Pendidikan (9)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(9)</span> --}}
                </a>
                </li>
                <li class="border-b-2 py-0.5">
                <a href="/program/program-bedah-rumah-yatim" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Wisata Yatim (2)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(1)</span> --}}
                </a>
                </li>
                <li class="border-b-2 py-0.5">
                <a href="/program/program-kado-untuk-yatim" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Belanja Yatim (4)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(1)</span> --}}
                </a>
                </li>
                <li class="border-b-2 py-0.5">
                <a href="/program/program-makan-sehat" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Makan Bersama (4)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(3)</span> --}}
                </a>
                </li>
                <li class="border-b-2 py-0.5">
                <a href="/program/program-pendidikan" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Bakti Sosial (8)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(8)</span> --}}
                </a>
                </li>
                <li class="border-b-2 py-0.5">
                <a href="/program/program-santunan" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Jajan Yatim (5)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(5)</span> --}}
                </a>
                </li>
                <li class="border-b-2 py-0.5">
                <a href="/program/program-wisata-yatim" class="flex justify-between items-center text-blue-600">
                    <span class="text-gray-600 hover:text-gray-800 font-roboto text-sm">Program Sembako Mingguan (5)</span>
                    {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(4)</span> --}}
                </a>
                </li>
            </ul>   
        </div>
    </div>
@endsection