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
        <div class="col-md-5">
            <h3 class="fw-bold">{{ $campaign->judul }}</h3>
            <p class="text-muted">{{ $campaign->deskripsi }}</p>

            <!-- Donasi Terkumpul -->
            <h4 class="text-success">Rp {{ number_format($campaign->terkumpul, 0, '.', '.') }}</h4>
            <p class="text-muted">dari target <strong>Rp {{ number_format($campaign->target, 0, '.', '.') }}</strong>
            </p>

            <!-- Progress Bar -->
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;"
                    aria-valuenow="{{ $campaign->terkumpul }}" aria-valuemin="0"
                    aria-valuemax="{{ $campaign->target }}"></div>
            </div>

            <!-- Jumlah Donatur -->
            <p><strong>{{ $campaign->donaturs->count() }} Donatur</strong> telah berdonasi</p>

            <!-- Tombol Donasi -->
            <a href="#" class="btn btn-success w-100">Donasi Sekarang</a>
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
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>John Doe</strong>
                            <span class="badge bg-success">Rp 500.000</span>
                        </div>
                        <small class="text-muted">"Semoga berkah dan bermanfaat!"</small>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Jane Smith</strong>
                            <span class="badge bg-success">Rp 1.000.000</span>
                        </div>
                        <small class="text-muted">"Semoga anak-anak yatim mendapatkan pendidikan terbaik."</small>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Anonim</strong>
                            <span class="badge bg-success">Rp 200.000</span>
                        </div>
                        <small class="text-muted">"Saya hanya bisa membantu sedikit, semoga bermanfaat."</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
