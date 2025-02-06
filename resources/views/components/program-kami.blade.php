<section class="choose-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-area text-center mb-50">
                    <span class="section-subtitle tp_fade_left">Bahagiakan Yatim Pasti Bisa</span>
                    <h2 class="section-title tp_title_slideup mb-0">Program Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($staticData['program'] as $item)
                <div wire:key="{{ $item->slug }}" class="col-xl-3 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left">
                    <div class="choose-item mb-30">
                        <div class="choose-item-img">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image Not Found">
                        </div>
                        <div class="choose-item-content">
                            <h5 class="choose-item-content-title">
                                <a wire:navigate
                                    href="{{ route('detail-program', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}</a>
                            </h5>
                            <p class="text-clamp">{{ $item->deskripsi }}</p>
                            <a wire:navigate href="{{ route('detail-program', ['slug' => $item->slug]) }}"
                                class="choose-item-content-btn">Selengkapnya<i class="fa-light fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                <h4 class="text-center text-danger">Data Tidak Ditemukan</h4>
            @endforelse
        </div>
    </div>
</section>
