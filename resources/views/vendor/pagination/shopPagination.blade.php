@if ($paginator->hasPages())
    <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())

        @else
            <li>
                <a href="{{ $paginator->toArray()['first_page_url'] }}">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                </a>
                <a href="{{ $paginator->previousPageUrl() }}">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><a class="disabled">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="{{ $paginator->toArray()['last_page_url'] }}" aria-label="@lang('pagination.next')">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            </li>
        @else

        @endif
    </ul>
@endif
