<div x-data="dropdown" x-bind="dropdown" {{ $attributes->class(['relative']) }}>
    <button type="button" x-bind="button" x-ref="button" {{ $button->attributes->class }}>
        {{ $button }}
    </button>

    <div x-bind="panel" x-ref="panel" {{ $panel->attributes->class(['absolute']) }}>
        {{ $panel }}
    </div>
</div>
