<{{ $tag() }} x-data="dropdown" x-bind="dropdown" class="relative" {{ $attributes->except(['class']) }}>
    <button type="button" x-bind="button" x-ref="button">
        {{ $button }}
    </button>

    <div x-bind="panel" x-ref="panel" class="absolute">
        {{ $slot }}
    </div>
</{{ $tag() }}>
