<section class="h4_feature-area pt-80 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8">
                <div class="h4_section-area text-center mb-50">
                    <span class="section-subtitle tp_fade_left">Bahagiakan Yatim Pasti Bisa</span>
                    <h2 class="h4_section-title tp_title_slideup mb-0">Mari Bersama Tebarkan Kebaikan</h2>
                </div>
            </div>
        </div>
        @if ($staticData['data_yatim'])
            @livewire('counter-yatim', ['dataYatim' => $staticData['data_yatim']])
        @else
            <h4 class="text-center text-danger">Data Yatim belum ditetapkan</h4>
        @endif

    </div>
</section>
