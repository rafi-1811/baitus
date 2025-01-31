<section class="campaign-section container">
    <div class="row">
        @forelse ($campaign as $item)
            <div class="col-md-6 col-lg-4 card-wrap">
                @livewire('campaign-card', ['campaign' => $item])
            </div>
        @empty
            <div>
                <h3 class="text-center">Campaign belum tersedia</h3>
            </div>
        @endforelse
    </div>

    <style>
        .campaign-section {
            padding: 70px 20px;
        }

        .card-wrap {
            margin-bottom: 20px;
        }

        .card-wrap:last-child {
            margin-bottom: 0;
        }
    </style>
</section>
