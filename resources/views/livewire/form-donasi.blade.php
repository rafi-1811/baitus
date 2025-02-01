@section('header')
    <div class="shadow-sm d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" style="width: 90px">
    </div>
@endsection

<div class="container mt-3">
    <div class="card border border-1 rounded-4" style="max-width: 600px; margin: 0 auto;">
        <div class="card-body p-4">
            <h4 class="text-center mb-4 fw-bold">Form Donasi</h4>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div style="font-size: 14px" class="alert alert-warning mb-4" role="alert">
                <i class="fas fa-info-circle me-2"></i>
                Untuk memastikan Anda menerima bukti donasi yang valid, kami mohon agar Anda melengkapi email Anda.
            </div>

            <form wire:submit.prevent="submitDonasi">
                <!-- Nominal Donasi -->
                <div x-data="{
                    showModal: false,
                    anonymous: @entangle('anonymous'),
                    nominal: @entangle('nominalDonasi'),
                    rupiah(value) {
                        let angka = value.replace(/\D/g, '');
                        return angka ? new Intl.NumberFormat('id-ID', {
                            style: 'decimal',
                            currency: 'IDR'
                        }).format(angka) : '';
                    },
                    pilihNominal(amount) {
                        this.showModal = false;
                        this.nominal = this.rupiah(amount);
                        this.$wire.nominalDonasi = this.nominal;
                    }
                }" @click.away="showModal = false">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nominal Donasi</label>
                        <div
                            class="input-group @error('nominalDonasi')
                    error-form
                @enderror">
                            <span class="input-group-text">Rp</span>
                            <input id="nominalDonasi" type="text" class="form-control form-control-lg fs-6"
                                placeholder="Nominal Donasi" x-model="nominal" wire:model="nominalDonasi"
                                @focus="showModal = true"
                                @input="nominal = rupiah($event.target.value), showModal = false" autocomplete="off">

                        </div>
                        @error('nominalDonasi')
                            <div class="form-error-text">{{ $message }}</div>
                        @enderror


                        <!-- Modal Pilihan Donasi -->
                        <div x-cloak x-show="showModal" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100" class="card mt-2 shadow-sm">
                            <div class="card-body p-3">
                                <div class="row g-2">
                                    <template x-for="amount in ['10000', '15000', '25000', '30000', '50000', '100000']">
                                        <div class="col-6">
                                            <button @click.prevent="pilihNominal(amount)"
                                                class="btn border w-100 text-gray"
                                                x-text=" 'Rp ' + new Intl.NumberFormat('id-ID',{currency: 'IDR', style: 'decimal'}).format(amount)"></button>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Diri -->
                <div class="mb-3 @error('nama')
                    error-form
                @enderror"
                    x-data="{ anonymous: @entangle('anonymous'), nama: @entangle('nama') }">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input x-model="nama" :value="anonymous ? 'Hamba Allah' : null" wire:model="nama" type="text"
                        class="form-control form-control-lg fs-6" placeholder="Masukkan nama lengkap"
                        @change="$wire.set('nama', nama)" :disabled="anonymous">
                    @error('nama')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>

                {{-- email --}}
                <div class="mb-3 @error('email')
                    error-form
                @enderror">
                    <label class="form-label fw-semibold">Email <span class="text-muted">(Opsional)</span></label>
                    <input wire:model="email" type="email" class="form-control form-control-lg fs-6"
                        placeholder="Masukkan email">
                    @error('email')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Nomor Telepon --}}
                <div class="mb-3 @error('telepon')
                    error-form
                @enderror">
                    <label class="form-label fw-semibold">Nomor Telepon <span
                            class="text-muted">(Opsional)</span></label>
                    <input wire:model="telepon" type="tel" class="form-control form-control-lg fs-6"
                        placeholder="Masukkan Nomor Telepon">
                    @error('telepon')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Doa/Harapan -->
                <div class="mb-3 @error('doa')
                    error-form
                @enderror">
                    <label class="form-label fw-semibold">Doa dan Harapan <span
                            class="text-muted">(Opsional)</span></label>
                    <textarea wire:model="doa" class="form-control form-control-lg fs-6" rows="5"
                        placeholder="Tuliskan doa dan harapan Anda"></textarea>
                    @error('doa')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Checkbox Anonim -->
                <div class="mb-4" x-data="{ anonymous: @entangle('anonymous'), nama: @entangle('nama') }">
                    <div class="form-check">
                        <input class="form-check-input" x-model="anonymous" type="checkbox" id="anonymousCheck"
                            @change="nama = anonymous ? 'Hamba Allah' : ''" wire:model="anonymous">
                        <label class="form-check-label" for="anonymousCheck"
                            x-text="anonymous ? 'Anda akan berdonasi secara anonim' : 'Sembunyikan nama saya (Anonim)'">
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button wire:loading.attr="disabled" type="submit"
                    class="btn btn-warning w-100 py-2 fw-semibold rounded-3">
                    <i class="fas fa-heart me-2"></i>Lanjutkan Donasi
                </button>
            </form>
        </div>
    </div>
</div>


@push('scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        document.addEventListener('livewire:navigated', () => {
            Livewire.on('donasiSent', (data) => {
                snap.pay(data[0].snapToken, {
                    onSuccess: function(result) {
                        console.log(result);
                        Livewire.dispatch('paymentSuccess', {
                            order_id: result.order_id,
                            campaign_id: data[0].campaign_id
                        });
                    },
                    onPending: function(result) {
                        Livewire.dispatch('paymentPending', {
                            order_id: result.order_id
                        });
                    },
                    onError: function(result) {
                        Livewire.dispatch('paymentError', result);
                    },
                    onClose: function() {
                        Livewire.dispatch('paymentClosed');
                    }
                });
            });
        });
    </script>
@endpush
