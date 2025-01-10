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
        @if ($staticData['data_yatim'])
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 tp_has_fade_anim" data-fade-from="left">
                    <div class="h4_feature-item mb-30">
                        <div class="h4_feature-item-img">
                            <img src="{{ asset('assets/images/feature/home4/baksos.jpg') }}" alt="">
                        </div>
                        <div class="counter" data-target="{{ $staticData['data_yatim']->total_yatim_binaan }}">
                            0
                        </div>
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
                        <div class="counter" data-target="{{ $staticData['data_yatim']->total_yatim_luar_binaan }}">0
                        </div>
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
                        <div class="counter" data-target="{{ $staticData['data_yatim']->total_kegiatan }}">0
                        </div>
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
                        <div class="counter" data-target="{{ $staticData['data_yatim']->total_daerah_cakupan }}">
                            0</div>
                        <div class="h4_feature-item-content">
                            <h4 class="h4_feature-item-content-title">Cakupan Daerah</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p>data yatim belum ditetapkan.</p>
        @endif

    </div>
</section>
