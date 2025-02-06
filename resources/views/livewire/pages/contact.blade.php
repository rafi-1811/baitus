{{-- SEO --}}
@section('title', "Kontak - Yayasan Baitus Sa'adah Amanah")
@section('meta_description',
    'Hubungi kami untuk informasi lebih lanjut mengenai program-program di Yayasan Baitus
    Saadah Amanah. Kami siap melayani segala pertanyaan terkait donasi, program bantuan sosial, atau kolaborasi dengan
    lembaga Anda. Kami percaya bahwa dengan bersama-sama, kita bisa memberikan dampak positif bagi anak yatim dan
    masyarakat.')
@section('meta_keywords',
    'kontak Yayasan Baitus Saadah Amanah, hubungi kami, informasi yayasan, donasi, program sosial,
    bantuan yatim,kontak donasi, informasi program yayasan, kolaborasi yayasan')
    {{-- @section('meta_image') --}}


    <!-- contact area start -->
    <section class="contact-area pt-140 pb-140">
        <div class="container">
            <div class="row pb-20 justify-content-center">
                <div class="col-xxl-5 col-xl-6">
                    <div class="inner_section-area mb-50 text-center">
                        <span class="inner_section-subtitle tp_subtitle_anim"></span>
                        <h2 class="inner_section-title tp_title_slideup mb-30">Kontak Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-35 tp_fade_left" data-fade-from="left">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="contact-content-title">WhatsApp</h4>

                            <p><a href="https://wa.me/{{ $staticData['kontak']->telepon ?? '081210079178' }}"
                                    target="_blank">{{ $staticData['kontak']->telepon ?? '081210079178' }}</a>
                                <br>
                                <a href="https://wa.me/{{ $staticData['kontak']->whatsapp ?? '082124771471' }}"
                                    target="_blank">{{ $staticData['kontak']->whatsapp ?? '082124771471' }}</a>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-35 tp_fade_left" data-fade-from="left" data-delay=".6">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="contact-content-title">Alamat</h4>
                            <p>
                                <a>
                                    {{ $staticData['kontak']->alamat ?? 'Jl.Pendowo Raya Gg. Kopo Kel. Limo Kec. Limo, Kota Depok,Jawa Barat 16515' }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-35 tp_fade_left" data-fade-from="left" data-delay=".9">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="contact-content">

                            <h4 class="contact-content-title">Waktu Oprasional</h4>
                            <p><a href="#">07.00 - 17.00</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30 tp_fade_left" data-fade-from="left" data-delay=".9">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="contact-content-title">Email</h4>
                            <p><a
                                    href="mailto:{{ $staticData['kontak']->email ?? 'officialyayasan@baitussaadahamanah.org' }}">{{ $staticData['kontak']->email ?? 'officialyayasan@baitussaadahamanah.org' }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-media-icons pt-105">
                <h4>Sosial Media</h4>
                <a href="https://www.facebook.com/baitus.a.yatim" target="_blank" class="icon facebook">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="https://youtube.com/@yayasanbaitussaadahamanaho8517?si=6I2xtsKqztSoAMLD" target="_blank"
                    class="icon youtube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.instagram.com/yayasanbaitussaadahamanah_/?igsh=MWdveXU2YzBjeHNhOA%3D%3D#"
                    target="_blank" class="icon instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://x.com/Baitussaadah_" target="_blank" class="icon x">
                    <i class="fab fa-x"></i>
                </a>
                <a href="https://www.tiktok.com/@yayasanbaitussaadahamah" target="_blank" class="icon tiktok">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
            <div class="contact-bottom pt-105">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-bottom-left">
                            <div class="inner_section-area mb-50">
                                <span class="inner_section-subtitle tp_subtitle_anim">Hubungi Kami</span>
                                <h2 class="inner_section-title tp_title_slideup mb-0">Mari tebar kebahagiaan <br>
                                    untuk mereka</h2>
                            </div>
                            <div class="contact-map tp_fade_right">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15860.826156869298!2d106.78650762904047!3d-6.367311487177889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef4ff8004da7%3A0x898e33e9f15f600!2sTaman%20Bermain%20dan%20Belajar%20Yayasan%20Baitus%20Sa&#39;adah%20Amanah!5e0!3m2!1sid!2sid!4v1731545798084!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 tp_fade_left">
                        @livewire('form-kontak')
                    </div>
                </div>
            </div>
        </div>


    </section>


    <!-- contact area end -->
