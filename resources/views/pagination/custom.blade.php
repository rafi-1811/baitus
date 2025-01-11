@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <div class="row">
            <div class="col-12">
                <div class="pagination-area pt-30 d-flex justify-content-center tp_fade_bottom">
                    {{-- Tombol "Previous" --}}
                    @if ($paginator->onFirstPage())
                        <span class="disabled" style="cursor: default; border-color: #e9e9e9; color: #e9e9e9"><i class="fa-light fa-arrow-left"></i></span>
                    @else
                        <span
                                wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                wire:loading.attr="disabled"
                                dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}">
                                <i class="fa-light fa-arrow-left"></i>
                        </span>
                    @endif

                    {{-- Nomor Halaman --}}
                    <ul>
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <li><span>{{ $element }}</span></li>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}" aria-current="page">
                                            <a href="#" class="active">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
                                        </li>
                                    @else
                                        <li wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}">
                                            <span 
                                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                                wire:loading.attr="disabled">
                                                {{ str_pad($page, 2, '0', STR_PAD_LEFT) }}
                                            </span>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </ul>

                    {{-- Tombol "Next" --}}
                    @if ($paginator->hasMorePages())
                        <span wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                wire:loading.attr="disabled"
                                dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}">
                                <i class="fa-light fa-arrow-right"></i>
                        </span>
                    @else
                        <span class="disabled" style="cursor: default; border-color: #e9e9e9; color: #e9e9e9"><i class="fa-light fa-arrow-right"></i></span>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>