@extends('layout.layout')

<?php
$title = $data->kategori_program;
$subTitle = 'Home';
?>

@section('content')
    <div class="container1">
        <div class="content1">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="h2_section-area text-center mb-50">
                        <h2 class="h21_section-title mb-0">{{ $data->kategori_program }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($berita as $item)
                    @if ($berita)
                        <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".4">
                            <div class="h2_blog-item mb-35">
                                <div class="h2_blog-img w_img mb-25">
                                    <a href="{{ route('detail-berita', ['slug' => $item->slug]) }}"><img
                                            src="{{ asset('storage/' . $item->cover_gambar_berita) }}"
                                            alt="{{ $data->kategoti_program }}"></a>
                                </div>
                                <div class="h2_blog-content">
                                    <div class="h2_blog-content-meta">
                                        <span><a href="#">{{ $data->kategori_program }}</a></span>
                                        <span><i class="fa-light fa-calendar-days"></i>{{ $item->created_at }}</span>
                                    </div>
                                    <h4 class="h2_blog-content-title">
                                        <a
                                            href="{{ route('detail-berita', ['slug' => $item->slug]) }}">{{ $item->judul }}.</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="text-center">Data Tidak Ditemukan</p>
                    @endif
                @endforeach

                <div>{{ $berita->links() }}</div>

                {{-- <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".6">
                    <div class="h2_blog-item mb-35">
                        <div class="h2_blog-img w_img mb-25">
                            <a href="{{ url('blog-details') }}"><img
                                    src="{{ asset('assets/images/blog/home2/santunan.jpg') }}" alt="Image Not Found"></a>
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
                </div> --}}

            </div>

            {{-- pagination --}}
            <div class="row">
                <div class="col-12">
                    <div class="pagination-area pt-30 d-flex justify-content-center tp_fade_bottom">
                        <span><i class="fa-light fa-arrow-left"></i></span>
                        <ul>
                            <li><a href="#" class="active">01</a></li>
                            <li><a href="#">02</a></li>
                        </ul>
                        <span><i class="fa-light fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
        </div>

        {{-- sidebar --}}
        <div class="sidebar1">
            <h6>Kategori Program</h6>
            <ul class="space-y-2">
                @foreach ($staticData['program'] as $item)
                    <li class="border-b-2 py-0.5">
                        <a href="{{ route('detail-program', ['slug' => $item->slug]) }}"
                            class="flex justify-between items-center text-blue-600">
                            <span
                                class="text-gray-600 hover:text-gray-800 font-roboto text-sm">{{ $item->kategori_program }}
                                ({{ $item->berita->count() }})
                            </span>
                            {{-- <span class="text-gray-600  hover:text-gray-800 font-roboto text-sm">(4)</span> --}}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
@endsection
