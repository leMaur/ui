<form action="{{ $action }}" method="{{ $method }}" role="search" {{ $attributes->except(['role']) }}>
    <div class="{{ $labelWrapperClass }}">
        <label for="{{ $id }}" {{ $attributes->class(['sr-only' => $srOnly, $labelClass]) }}>{{ $label }}</label>
        <div class="{{ $inputWrapperClass }}">
            <input id="{{ $id }}" type="search" title="{{ $inputTitle }}" class="{{ $inputClass }}">
            <div class="{{ $buttonWrapperClass }}">
                <button type="submit" class="{{ $buttonClass }}">
                    {{ $button }}
                </button>
            </div>
        </div>
    </div>
</form>
