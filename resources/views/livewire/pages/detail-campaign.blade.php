@section('header')
    <x-header />
@endsection

<div class="container mt-4 mb-4">
    <div class="row">
        <!-- Gambar Campaign -->
        <div class="col-md-7">
            <img src="{{ asset('storage/' . $campaign->gambar) }}" class="img-fluid rounded shadow-sm"
                alt="Gambar Campaign">
        </div>

        <!-- Detail Campaign -->
        <div class="col-md-5 detail-campaign">
            <h3 class="fw-bold">{{ $campaign->judul }}</h3>
            <p class="text-muted campaign-deskripsi">{{ $campaign->deskripsi }}</p>

            <!-- Donasi Terkumpul -->
            <h4 class="campaign-terkumpul">Rp {{ number_format($campaign->terkumpul, 0, '.', '.') }}</h4>
            <p class="text-muted">dari target <strong>Rp {{ number_format($campaign->target, 0, '.', '.') }}</strong>
            </p>

            <!-- Progress Bar -->
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar"
                    style="width: {{ ($campaign->terkumpul / $campaign->target) * 100 }}%;"
                    aria-valuenow="{{ ($campaign->terkumpul / $campaign->target) * 100 }}" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>

            <!-- Jumlah Donatur -->
            <p><strong>{{ $campaign->donaturs->count() }} Donatur</strong> telah berdonasi</p>

            <!-- Tombol Donasi -->
            <a wire:navigate href="{{ route('form-donasi', ['slug' => $campaign->slug]) }}"
                class="button-donasi w-100">Donasi
                sekarang</a>
        </div>
    </div>

    <!-- Tabs Section -->
    <div class="mt-5">
        <ul class="nav nav-tabs" id="campaignTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cerita-tab" data-bs-toggle="tab" data-bs-target="#cerita"
                    type="button" role="tab" aria-controls="cerita" aria-selected="true">Cerita</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="donatur-tab" data-bs-toggle="tab" data-bs-target="#donatur" type="button"
                    role="tab" aria-controls="donatur" aria-selected="false">List Donatur</button>
            </li>
        </ul>

        <div class="tab-content mt-3" id="campaignTabsContent">
            <!-- Tab Cerita -->
            <div class="tab-pane fade show active" id="cerita" role="tabpanel" aria-labelledby="cerita-tab">
                <p>{{ $campaign->cerita }}</p>
            </div>

            <!-- Tab List Donatur -->
            <div class="tab-pane fade" id="donatur" role="tabpanel" aria-labelledby="donatur-tab">
                <ul class="list-group">
                    @forelse ($donatur as $item)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <strong>{{ $item->nama }}</strong>
                                <span class="badge bg-success">Rp
                                    {{ number_format($item->jumlah, 0, '.', '.') }}</span>
                            </div>
                            <small class="text-muted">"{{ $item->doa }}"</small>
                        </li>
                    @empty
                        <p class="text-center fs-6">Belum ada donatur nih, Donasi Yuk!!</p>
                    @endforelse

                </ul>
            </div>
        </div>
    </div>

    <style>
        .detail-campaign h3 {
            font-size: 30px;
        }

        @media (max-width: 576px) {
            .detail-campaign h3 {
                margin-top: 10px;
                font-size: 25px;
            }
        }

        .detail-campaign .campaign-deskripsi {
            font-size: 15px;
            line-height: 1.5;
        }

        .detail-campaign .campaign-terkumpul {
            color: var(--clr-theme-primary);
            margin-bottom: 0;
        }

        .detail-campaign .button-donasi {
            background-color: var(--clr-theme-primary);
            color: #fffefe;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            font-weight: 600;
        }

        .detail-campaign .button-donasi:hover {
            background-color: #cf8f30;
        }

        .nav-tabs .nav-item .nav-link {
            color: #1b2a52;
        }
    </style>
</div>
