<section class="feature-area pt-110 pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-area text-center mb-50">
                    <span class="section-subtitle tp_fade_left">Bahagiakan Yatim Pasti Bisa</span>
                    <h2 class="section-title tp_title_slideup mb-0">Visi & Misi</h2>
                </div>
            </div>
        </div>
        <div class="feature-top tp_fade_bottom">
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
                <div class="d-flex justify-content-center">
                    <h4 class="text-center text-danger">Visi Misi belum ditetapkan.</h4>
                </div>
            @endif
        </div>
    </div>
</section>
