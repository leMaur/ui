<input
    type="checkbox"
    name="{{ $name }}"
    id="{{ $id }}"
    @if($value())
        value="{{ $value() }}"
    @endif
    @if($checked)
        checked
    @endif
    {{ $attributes }}
/>
