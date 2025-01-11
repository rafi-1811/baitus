<div class="container1">
    <div class="content1">
        {{-- Breadcump title --}}
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="h2_section-area text-center mb-50">
                    <h2 class="h21_section-title mb-0">{{ $program->kategori_program }}</h2>
                </div>
            </div>
        </div>
        {{-- end --}}

        {{-- Section Berita Terkait --}}
        <div class="row">
            @php
                $delay = 0.2;
            @endphp
            @forelse ($berita as $item)
                <div wire:key="{{ $item->slug }}" class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left"
                    data-delay="{{ number_format($delay, 1) }}">
                    <div class="h2_blog-item mb-35">
                        <div class="h2_blog-img w_img mb-25">
                            <a wire:navigate href="{{ route('detail-berita', ['slug' => $item->slug]) }}"><img
                                    src="{{ asset('storage/' . $item->cover_gambar_berita) }}"
                                    alt="{{ $program->kategori_program }}"></a>
                        </div>
                        <div class="h2_blog-content">
                            <div class="h2_blog-content-meta">
                                <span><a href="#">{{ $program->kategori_program }}</a></span>
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
                @php
                    $delay += 0.2;
                @endphp
            @empty
                <h1 class="text-center">Data Tidak Ditemukan</h1>
            @endforelse
            <div>{{ $berita->links('pagination.custom', data: ['scrollTo' => false]) }}</div>
        </div>
        {{-- end --}}
    </div>

    {{-- Sidebar Kategori Program --}}
    <div class="sidebar1">
        <h6>Kategori Program</h6>
        <ul class="space-y-2">
            @foreach ($staticData['program'] as $item)
                <li wire:key="{{ $item->id }}" class="border-b-2 py-0.5">
                    <a wire:navigate href="{{ route('detail-program', ['slug' => $item->slug]) }}"
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
    {{-- end --}}
</div>
