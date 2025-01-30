@section('header')
    <div class="shadow-sm d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" style="width: 90px">
    </div>
@endsection

<div class="container mt-3">
    <div class="card shadow-sm border-0 rounded-4" style="max-width: 600px; margin: 0 auto;">
        <div class="card-body p-4">
            <h4 class="text-center mb-4 fw-bold">Form Donasi</h4>

            <div class="alert alert-warning mb-4" role="alert">
                <i class="fas fa-info-circle me-2"></i>
                Untuk memastikan Anda menerima bukti donasi yang valid, kami mohon agar Anda melengkapi informasi nomor
                HP dan email Anda.
            </div>

            <form wire:submit.prevent="submitDonasi">
                <!-- Nominal Donasi -->
                <div x-data="{
                    showModal: false,
                    nominal: '',
                    formatRupiah(angka) {
                        let number_string = angka.replace(/[^,\d]/g, '').toString(),
                            split = number_string.split(','),
                            sisa = split[0].length % 3,
                            rupiah = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                        if (ribuan) {
                            let separator = sisa ? '.' : '';
                            rupiah += separator + ribuan.join('.');
                        }
                        return split[1] !== undefined ? 'Rp ' + rupiah + ',' + split[1] : 'Rp ' + rupiah;
                    },
                    selectNominal(amount) {
                        this.nominal = this.formatRupiah(amount.toString());
                        this.showModal = false;
                    },
                    updateNominal(event) {
                        this.nominal = this.formatRupiah(event.target.value);
                    }
                }" @click.away="showModal = false">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nominal Donasi</label>
                        <input type="text" class="form-control form-control-lg fs-6" placeholder="Nominal Donasi"
                            wire:model="nominalDonasi" x-model="nominal" @focus="showModal = true"
                            @input="showModal = false, updateNominal($event)">

                        <!-- Modal Pilihan Donasi -->
                        <div x-cloak x-show="showModal" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100" class="card mt-2 shadow-sm">
                            <div class="card-body p-3">
                                <div class="row g-2">
                                    <template x-for="amount in [10000, 15000, 25000, 30000, 50000, 100000]">
                                        <div class="col-6">
                                            <button @click.prevent="selectNominal(amount)" wire:model="nominalDonasi"
                                                class="btn border w-100 text-gray"
                                                x-text="'Rp ' + new Intl.NumberFormat('id-ID').format(amount)"></button>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Diri -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input wire:model="nama" type="text" class="form-control form-control-lg fs-6"
                        placeholder="Masukkan nama lengkap">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email <span class="text-muted">(Opsional)</span></label>
                    <input wire:model="email" type="email" class="form-control form-control-lg fs-6"
                        placeholder="Masukkan email">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nomor Telepon <span
                            class="text-muted">(Opsional)</span></label>
                    <input wire:model="telepon" type="tel" class="form-control form-control-lg fs-6"
                        placeholder="Masukkan nomor telepon">
                </div>

                <!-- Doa/Harapan -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Doa dan Harapan <span
                            class="text-muted">(Opsional)</span></label>
                    <textarea wire:model="doa" class="form-control form-control-lg fs-6" rows="5"
                        placeholder="Tuliskan doa dan harapan Anda"></textarea>
                </div>

                <!-- Checkbox Anonim -->
                <div class="mb-4" x-data="{ anonymous: false }">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="anonymousCheck" wire:model="anonymous">
                        <label class="form-check-label" for="anonymousCheck"
                            x-text="anonymous ? 'Anda akan berdonasi secara anonim' : 'Sembunyikan nama saya (Anonim)'">
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-warning w-100 py-2 fw-semibold rounded-3">
                    <i class="fas fa-heart me-2"></i>Lanjutkan Donasi
                </button>
            </form>
        </div>
    </div>
</div>
