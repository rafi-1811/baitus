<section class="campaign-section container">
    <div class="row">
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
