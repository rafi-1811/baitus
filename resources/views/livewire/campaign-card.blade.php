<div class="card shadow-sm border-0 rounded-4 card-hover card-campaign">
    <div class="position-relative">
        <img src="{{ asset('storage/' . $campaign->gambar) }}" class="card-img-top img-hover" alt="Campaign Image">
    </div>


    <div class="card-body">
        <div>
            <h5 class="fw-bold">{{ $campaign->judul }}</h5>
            <p class="text-muted">{{ Str::limit($campaign->deskripsi, 100) }}</p>
        </div>

        <div class="d-flex justify-content-between align-items-end mb-2">
            <div>
                <h6 class="campaign-terkumpul fw-bold mb-1">Rp
                    {{ number_format($campaign->terkumpul, 0, ',', '.') }}</h6>
                <small class="text-muted">terkumpul dari Rp
                    {{ number_format($campaign->target, 0, ',', '.') }}</small>
            </div>
            <span
                class="campaign-target fw-bold">{{ round(($campaign->terkumpul / $campaign->target) * 100, 2) }}%</span>
        </div>

        <div class="progress mb-4">
            <div class="progress-bar bg-primary" role="progressbar"
                style="width: {{ ($campaign->terkumpul / $campaign->target) * 100 }}%"
                aria-valuenow="{{ ($campaign->terkumpul / $campaign->target) * 100 }}" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div>


        <a class="button-donasi w-100 rounded-pill py-2 fw-bold" wire:navigate
            href="{{ route('detail-campaign', ['slug' => $campaign->slug]) }}">
            Lihat detail
            <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>
