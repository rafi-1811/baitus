<li>
    <a wire:navigate wire:current.exact="active" {{ $attributes->merge() }}>{{ $slot }}</a>
</li>
