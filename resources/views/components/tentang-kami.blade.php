<section class="banner-area">
    <div class="container">
        <div class="banner-single">
            <div class="banner-img tp_fade_left">
                <img class="img-tentang-yayasan"
                    src="{{ asset('storage/' . ($staticData['tentang_yayasan']->gambar_tentang_yayasan ?? '')) }}"
                    alt="ini gambar tentang yayasan">

            </div>
            <div class="banner-content">
                <div class="banner-wrapper">
                    <div class="banner-content-subtitle tp_fade_left">Bahagiakan Yatim Pasti Bisa</div>
                </div>
                <h1 class="banner-content-title tp_has_text_reveal_anim">Yayasan Baitus Sa'adah Amanah</h1>
                <p>
                    {{ $staticData['tentang_yayasan']->tentang_yayasan ?? 'Yayasan Baitussaadah Amanah adalah Yayasan
                     yang berdiri sejak 2021 untuk membantu dan memajukan kehidupan anak-anak yatim dengan program yang efektif
                      dan berkesinambungan untuk kehidupan yang lebih baik' }}
                </p>
            </div>
        </div>
    </div>
</section>
