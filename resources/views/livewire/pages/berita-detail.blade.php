<!-- blog details area start -->
<section class="blog_details-area pt-105 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_details-left mb-40">
                    {{-- head berita --}}
                    <div class="blog_details-img">
                        <img src="{{ asset('storage/' . $berita->cover_gambar_berita) }}"
                            alt="{{ 'gambar terkait ' . $berita->judul . ' ?>' }}" class="w-100 tp_fade_bottom">
                        <div class="blog_details-meta-box tp_fade_bottom">
                            <div class="blog_details-meta">
                                <span><a wire:navigate
                                        href="{{ route('detail-program', ['slug' => $berita->program->slug]) }}">{{ $berita->kategori }}</a></span>
                                <span><a href="#"><i class="fa-light fa-circle-user me-1"></i>By
                                        Pengurus</a></span>
                                <span><i
                                        class="fa-light fa-calendar-days"></i>{{ \Carbon\Carbon::parse($berita->created_at)->locale('id')->format('d F Y') }}</span>
                            </div>
                            <div class="blog_details-meta-action">
                                <ul>
                                    <li><i class="fa-light fa-heart"></i>{{ $likes }}</li>
                                    <li><i class="fa-regular fa-eye"></i>{{ $views }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    {{-- kontent berita --}}
                    <div class="blog_details-content">
                        <h3 class="blog_details-content-title tp_has_text_reveal_anim">{{ $berita->judul }}</h3>
                        <p class="blog_details-content-text mb-30 tp_fade_bottom">
                            {!! $content['opening'] !!}</p>
                        @if ($berita->quotes)
                            <blockquote class="tp_fade_bottom">
                                <p>{{ $berita->quotes }}
                                </p>
                                <span>Nelson Mandela</span>
                            </blockquote>
                        @else
                            <span></span>
                        @endif
                        <p class="blog_details-content-text mb-35 tp_fade_bottom">
                            {!! $content['pre_image'] !!}</p>
                        <div class="row align-items-center mb-20">
                            <div class="col-xl-6 tp_fade_right">
                                <div class="inner-img w_img mb-35 mb-xl-0 tp_fade_right">
                                    <img src="{{ asset('storage/' . $berita->gambar_dokumentasi[0]) ?? $berita->gambar_dokumentasi[0] }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 tp_fade_left">
                                <p class="blog_details-content-text mb-0">{!! $content['beside_image'] !!}</p>
                            </div>
                        </div>
                        <p class="blog_details-content-text mb-45 tp_fade_bottom">
                            {!! $content['closing'] !!}</p>
                        <div class="blog_details-content-bottom tp_fade_bottom">
                            <div class="blog_details-content-share">
                                <a href="#"><i class="fa-light fa-share-nodes"></i>Ayo Bagikan!</a>
                            </div>
                            <div class="docs-berita">
                                <a href="{{ route('galeri-berita', ['slug' => $berita->slug]) }}">Lihat dokumentasinya
                                    disini</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- cari berita  --}}
            <div class="col-lg-4">
                <div class="blog_details-right position-relative mb-40">
                    @livewire('search-berita')
                    <div class="blog_details-widget mb-30 tp_fade_left">
                        <h5 class="blog_details-widget-title mb-25">Kategori Program</h5>
                        <ul>
                            @foreach ($staticData['program'] as $item)
                                <li><a wire:navigate
                                        href="{{ route('detail-program', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}
                                        <span>({{ $item->berita->count() }})</span></a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="blog_details-widget mb-30 tp_fade_left">
                        <h5 class="blog_details-widget-title mb-25">Berita Terbaru</h5>
                        <ul>
                            @foreach ($staticData['berita'] as $item)
                                <li><a wire:navigate
                                        href="{{ route('detail-berita', $item->slug) }}">{{ $item->judul }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- blog details area end -->
