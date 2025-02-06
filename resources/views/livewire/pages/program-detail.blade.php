{{-- SEO --}}
@section('title', $program->kategori_program . " - Yayasan Baitus Sa'adah Amanah")

@section('meta_description', $program->deskripsi)

@section('meta_keywords', 'donasi yatim, yayasan sosial, bantuan yatim, pendidikan yatim, zakat yatim, sedekah yatim' .
    $program->kategori_program)

@section('meta_image', asset('storage/' . $program->gambar))


<div class="container mb-xl-5">
    {{-- Breadcump title --}}
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="h2_section-area text-center mb-50">
                <h2 class="h21_section-title mb-0">{{ $program->kategori_program }}</h2>
            </div>
        </div>
    </div>
    {{-- end --}}
    <div class="wrap-item-berita">
        <div class="content1">
            {{-- Section Berita Terkait --}}
            <div class="row">
                @forelse ($berita as $item)
                    <div wire:key="{{ $item->slug }}" class="col-xl-4 col-md-6 tp_fade_left">
                        <div class="h2_blog-item">
                            <div class="h2_blog-img w_img">
                                <a wire:navigate href="{{ route('detail-berita', ['slug' => $item->slug]) }}"><img
                                        src="{{ asset('storage/' . $item->cover_gambar_berita) }}"
                                        alt="{{ $program->kategori_program }}"></a>
                            </div>
                            <div class="h2_blog-content">
                                <div class="h2_blog-content-meta">
                                    <span><a wire:navigate
                                            href="{{ route('detail-program', ['slug' => $program->slug]) }}">{{ $program->kategori_program }}</a></span>
                                    <span><i
                                            class="fa-light fa-calendar-days"></i>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->format('d F Y') }}</span>
                                </div>
                                <h4 class="h2_blog-content-title">
                                    <a wire:navigate
                                        href="{{ route('detail-berita', ['slug' => $item->slug]) }}">{{ $item->judul }}.</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-center text-danger">Data Tidak Ditemukan</h4>
                @endforelse
                <div>{{ $berita->links('pagination.custom', data: ['scrollTo' => false]) }}</div>
            </div>
            {{-- end --}}
        </div>


        {{-- Sidebar Kategori Program --}}
        <div class="sidebar1">
            <div class="blog_details-widget mb-30 tp_fade_left">
                <h5 class="blog_details-widget-title mb-25">Kategori Program</h5>
                <ul>
                    @foreach ($staticData['program'] as $item)
                        <li wire:key="{{ $item->slug }}"><a wire:navigate
                                href="{{ route('detail-program', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}
                                <span>({{ $item->berita->count() }})</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- end --}}
    </div>

</div>
