<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="pagin">
            <span class="pagin-link">
                @if ($paginator->onFirstPage())
                @else
                    <li wire:click="previousPage"  wire:loading.attr="disabled" rel="prev" class="pagin-list">
                        <a href="#" class="pagin-link active">Previous</a>
                    </li>
                @endif
            </span>

            <span class="pagin-link">
                @if ($paginator->onLastPage())
                @else
                    <li wire:click="nextPage"  wire:loading.attr="disabled" rel="next" class="pagin-list">
                        <a href="#" class="pagin-link active">Next</a>
                    </li>
                @endif
            </span>
        </nav>
    @endif
</div>
