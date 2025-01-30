<section class="campaign-section container">
    <div class="row">
        @foreach ($campaign as $item)
            <div class="col-md-6 col-lg-4 card-wrap">
                @livewire('campaign-card', ['campaign' => $item])
            </div>
        @endforeach
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
