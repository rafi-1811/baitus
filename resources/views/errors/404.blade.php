<x-layout.layout-error titleBread="Page Not Found" subTitleBread="Home" title="Page Not Found">
    <!-- error area start -->
    <section class="error-area pt-140 pb-140">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="error-wrap text-center">
                        <div class="error-img mb-60 tp_fade_bottom">
                            <img src="{{ asset('assets/images/bg/404.png') }}" alt="Image Error">
                        </div>
                        <div class="error-content">
                            <h2 class="error-content-title tp_has_text_reveal_anim">Opos! Halaman tidak ditemukan</h2>
                            <p class="tp_desc_anim">Ada yang salah, sepertinya halaman ini <br>
                                tidak tersedia lagi</p>
                            <a wire:navigate href="{{ route('home') }}" class="theme-btn-2 tp_fade_bottom">Kembali ke
                                beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error area end -->
</x-layout.layout-error>
