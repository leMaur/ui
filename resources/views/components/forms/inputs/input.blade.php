<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $id() }}"
    @if($value())
        value="{{ $value() }}"
    @endif
    @if($autofocus)
        autofocus
    @endif
    {{ $attributes->except(['autofocus']) }}
/>
