<div class="card shadow-sm border-0 rounded-4 card-hover" style="max-width: 360px;">
    <div class="position-relative">
        <img src="{{ asset('storage/' . $campaign->gambar) }}" class="card-img-top img-hover" alt="Campaign Image"
            style="height: 200px; object-fit: cover;">
        <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 shadow-sm">
            <i class="fas fa-heart text-danger me-2"></i>DONASI
        </button>
    </div>


    <div class="card-body p-4">
        <h5 class="fw-bold mb-3">{{ $campaign->judul }}</h5>
        <p class="text-muted mb-4">{{ Str::limit($campaign->deskripsi, 100) }}</p>

        <div class="d-flex justify-content-between align-items-end mb-2">
            <div>
                <h6 class="fw-bold text-warning mb-1">Rp {{ number_format($campaign->terkumpul, 0, ',', '.') }}</h6>
                <small class="text-muted">terkumpul dari Rp
                    {{ number_format($campaign->target, 0, ',', '.') }}</small>
            </div>
            <span class="text-warning fw-bold">{{ round(($campaign->terkumpul / $campaign->target) * 100, 2) }}%</span>
        </div>

        <div class="progress mb-4" style="height: 8px;">
            <div class="progress-bar bg-primary" role="progressbar"
                style="width: {{ ($campaign->terkumpul / $campaign->target) * 100 }}%"
                aria-valuenow="{{ ($campaign->terkumpul / $campaign->target) * 100 }}" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div>


        <a style="font-size: 14px" class="btn btn-warning w-100 rounded-pill py-2 fw-bold" wire:navigate
            href="{{ route('detail-campaign', ['slug' => $campaign->slug]) }}">
            Lihat detail
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>
