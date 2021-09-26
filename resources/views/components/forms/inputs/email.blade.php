<input
    type="email"
    name="{{ $name }}"
    id="{{ $id() }}"
    @if($value())
        value="{{ $value() }}"
    @endif
    {{ $attributes }}
/>
