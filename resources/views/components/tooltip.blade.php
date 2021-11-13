<span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
    class="absolute top-0 left-0 w-full h-full whitespace-nowrap">
    <div class="relative w-full h-full">
        <div x-show="tooltip"
            class="absolute p-1 text-xs text-white transform translate-x-8 -translate-y-8 bg-blue-400 rounded-lg">
            {{ $slot }}
        </div>
    </div>
</span>
