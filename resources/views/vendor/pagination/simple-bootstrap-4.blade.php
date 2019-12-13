@if ($paginator->hasPages())
    <nav>
        <ul class="custom-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="prev page-item disabled" aria-disabled="true">
                    <span class="page-link">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="prev page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="next page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="next page-item disabled" aria-disabled="true">
                    <span class="page-link">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
