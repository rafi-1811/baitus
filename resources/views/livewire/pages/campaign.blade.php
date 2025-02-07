{{-- SEO --}}
@section('title', "Campaign - Yayasan Baitus Sa'adah Amanah")
@section('meta_description',
    'Dukung berbagai campaign yang kami jalankan untuk membantu anak yatim melalui donasi.
    Melalui program ini, kami berkomitmen untuk memberikan pendidikan, kebutuhan dasar, dan dukungan spiritual kepada
    anak-anak yatim yang membutuhkan. Temukan lebih lanjut bagaimana Anda bisa berpartisipasi dalam misi mulia kami dan
    berikan dampak nyata bagi masa depan mereka.')
@section('meta_keywords',
    'campaign Yayasan Baitus Saadah Amanah, donasi anak yatim, program donasi, bantuan sosial,
    campaign peduli yatim, donasi sosial, program pendidikan yatim, kampanye yayasan, sedekah yatim, bantuan pendidikan
    yatim, zakat yatim, infak yatim, wakaf yatim')
    {{-- @section('meta_image') --}}

    <section class="campaign-section container">
        <div class="row mx-auto">
            @forelse ($campaign as $item)
                <div wire:key="{{ $item->slug }}" class="col-md-6 col-lg-4 card-wrap">
                    @livewire('campaign-card', ['campaign' => $item])
                </div>
            @empty
                <div>
                    <h3 class="text-center">Campaign belum tersedia</h3>
                </div>
            @endforelse
        </div>

        <div id="modal-donasi" class="modal-donasi d-none">
            <div class="overlay"></div>
            <div class="modal-content">
                <img class="img-gift mx-auto" src="{{ asset('assets/images/logo/donation.png') }}" alt="Donation Logo">
                <h4 id="modal-title"></h4>
                <p>kami mengucapkan terima kasih atas donasi Anda. Kontribusi ini akan memberikan harapan baru bagi
                    anak-anak yatim yang membutuhkan.</p>
                <button id="button-close" class="button-close mx-auto">Tutup</button>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('modalSuccess', (data) => {
                    const nama = data[0].nama;
                    setTimeout(() => {
                        const buttonClose = document.getElementById('button-close');
                        document.getElementById('modal-donasi').classList.remove('d-none');
                        document.getElementById('modal-title').innerHTML = "Terima Kasih, " + nama;

                        buttonClose.addEventListener('click', () => {
                            document.getElementById('modal-donasi').classList.add('d-none');
                        });
                    }, 1000);
                });
            })
        </script>
    @endpush
