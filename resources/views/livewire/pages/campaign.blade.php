<section class="campaign-section container">
    <div class="row">
        @forelse ($campaign as $item)
            <div wire:key="{{ $item->slug }}" class="col-md-6 col-lg-4 card-wrap">
                @livewire('campaign-card', ['campaign' => $item])
            </div>
        @empty
            <div>
                <h3 class="text-center">Campaign belum tersedia</h3>
            </div>
        @endforelse
    </div>
</section>
