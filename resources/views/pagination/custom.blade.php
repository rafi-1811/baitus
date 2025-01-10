@if ($paginator->hasPages())
    <div class="row">
        <div class="col-12">
            <div class="pagination-area pt-30 d-flex justify-content-center tp_fade_bottom">
                {{-- Tombol "Previous" --}}
                @if ($paginator->onFirstPage())
                    <span class="disabled"><i class="fa-light fa-arrow-left"></i></span>
                @else
                    <span>
                        <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                            <i class="fa-light fa-arrow-left"></i>
                        </a>
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
                                    <li><a href="#" class="active">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
                                    </li>
                                @else
                                    <li><a href="{{ $url }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </ul>

                {{-- Tombol "Next" --}}
                @if ($paginator->hasMorePages())
                    <span>
                        <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                            <i class="fa-light fa-arrow-right"></i>
                        </a>
                    </span>
                @else
                    <span class="disabled"><i class="fa-light fa-arrow-right"></i></span>
                @endif
            </div>
        </div>
    </div>
@endif
