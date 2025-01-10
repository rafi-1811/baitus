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
            @if ($staticData['tentang_yayasan'])
                <div class="feature-item">
                    <h5 class="feature-item-title">Visi</h5>
                    <p>{{ $staticData['tentang_yayasan']->visi }}</p>
                </div>
                <div class="feature-item1 ">
                    <h5 class="feature-item-title">Misi</h5>
                    {!! $staticData['tentang_yayasan']->misi !!}
                </div>
            @else
                <p>Visi Misi belum ditetapkan.</p>
            @endif
        </div>
    </div>
</section>
