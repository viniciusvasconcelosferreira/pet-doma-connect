@if ($paginator->hasPages())
    <div class="pagination-box mt-3 mt-md-5">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="pagination-link prev disabled"><i class="fa-solid fa-chevron-left"></i></span>
                </li>
            @else
                <li>
                    <a class="pagination-link prev active" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')"><i class="fa-solid fa-chevron-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><a class="pagination-link disabled" href="#" aria-disabled="true" disabled>{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="pagination-link active" href="#" aria-current="page">{{ $page }}</a></li>
                        @else
                            <li><a class="pagination-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="next pagination-link active" href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="@lang('pagination.next')"><i class="fa-solid fa-chevron-right"></i></a>
                </li>
            @else
                <li>
                    <span class="next pagination-link disabled"><i class="fa-solid fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </div>
@endif