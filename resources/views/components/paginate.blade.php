<div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between ">
    <span class="text-xs text-gray-900 xs:text-sm">
        @if ($paginator->hasPages())
            Showing {{ $paginator?->firstItem() ?? 0 }} to {{ $paginator?->lastItem() ?? 0 }} of
            {{ $paginator->total() }}
            Entries
        @endif
    </span>
    <div class="inline-flex mt-2 xs:mt-0">
        <a href="{{ $paginator->previousPageUrl() }}"
            class="px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-l hover:bg-gray-400">
            Prev
        </a>
        <a href="{{ $paginator->nextPageUrl() }}"
            class="px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-r hover:bg-gray-400">
            Next
        </a>
    </div>
</div>
