<div class="row">
    @forelse ($dataYatim as $index => $item)
        <div wire:key="counter-section-{{ $index }}" id="counter-section-{{ $index }}"
            class="col-xl-3 col-lg-6 col-md-6 tp_has_fade_anim counter-section" data-fade-from="left">
            <div class="h4_feature-item mb-30">
                <div class="h4_feature-item-img">
                    <img src="{{ asset($item['img']) }}" alt="">
                </div>
                <div class="counter" data-target="{{ $item['number'] }}">
                    <h2>0</h2>
                </div>
                <div class="h4_feature-item-content">
                    <h4 class="h4_feature-item-content-title">{{ $item['text'] }}</a></h4>
                </div>
            </div>
        </div>
    @empty
        <div>
            <h1>Data Kosong</h1>
        </div>
    @endforelse
</div>

@push('scripts')
@endpush
