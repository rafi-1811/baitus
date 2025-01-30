<div class="card shadow-sm">
    <img src="{{ asset('storage/' . $campaign->gambar) }}" class="card-img-top" alt="Gambar Campaign">
    <div class="card-body">
        <h5 class="card-title">{{ $campaign->judul }}</h5>
        <p class="card-text text-muted">{{ $campaign->deskripsi }}</p>

        <!-- Progress Donasi -->
        <div class="mb-2">
            <small class="text-success">Rp {{ number_format($campaign->terkumpul, 0, '.', '.') }} terkumpul dari Rp
                {{ number_format($campaign->target, 0, '.', '.') }}</small>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <!-- Total Donasi & Donatur -->
        <div class="d-flex justify-content-between">
            <span class="fw-bold text-primary">Rp {{ number_format($campaign->terkumpul, 0, '.', '.') }}</span>
            <span class="fw-bold text-secondary">{{ $campaign->donaturs->count() }} Donatur</span>
        </div>

        <a wire:navigate href="{{ route('detail-campaign', ['slug' => $campaign->slug]) }}"
            class="btn btn-success w-100 mt-3">Donasi Sekarang</a>
    </div>
</div>
