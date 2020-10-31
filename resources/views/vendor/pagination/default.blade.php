@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li class="disabled px-1" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a href="#" aria-hidden="true"><i class="fas fa-arrow-left"></i></a>
            </li>
            @else
            <li class="px-1">
                <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active px-1" aria-current="page"><a href="#">{{ $page }}</a></li>
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
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
