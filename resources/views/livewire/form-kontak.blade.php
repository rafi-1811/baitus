<div class="contact-form mt-40 mt-lg-0">
    <h3 class="contact-form-title">Form Pesan</h3>
    <form wire:submit="save">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div
                    class="contact-form-item mb-25 @error('nama')
                    error-form
                @enderror">
                    <input type="text" placeholder="Nama" wire:model.live="nama">
                    <i class="fa-light fa-user"></i>
                    @error('nama')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div
                    class="contact-form-item mb-25 @error('email')
                    error-form
                @enderror">
                    <input type="email" placeholder="Email" wire:model.live="email">
                    <i class="fa-light fa-envelope"></i>
                    @error('email')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div
                    class="contact-form-item mb-25 @error('telepon')
                    error-form
                @enderror">
                    <input type="tel" placeholder="Nomor Telepon" wire:model.live="telepon">
                    <i class="fa-light fa-phone"></i>
                    @error('telepon')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div
                    class="contact-form-item mb-25 @error('pesan')
                    error-form
                @enderror">
                    <textarea name="message" placeholder="Pesan" wire:model.live="pesan"></textarea>
                    @error('pesan')
                        <div class="form-error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="contact-form-item pt-10">
                    <button type="submit" wire:loading.attr="disabled">Kirim</button>
                </div>
            </div>
        </div>
    </form>
</div>
