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
                                <a href="{{ route('detail-program', ['slug' => $item->slug]) }}"
                                    class="choose-item-content-btn">Selengkapnya<i
                                        class="fa-light fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Prgoram belum ditetapkan.</p>
            @endif
        </div>
    </div>
</section>
