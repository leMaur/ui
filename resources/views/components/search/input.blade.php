<form action="{{ $action }}" method="{{ $method }}" role="search" {{ $attributes->except(['role']) }}>
    <div @if($labelWrapperClass)class="{{ $labelWrapperClass }}"@endif>
        <label for="{{ $id }}" @if($labelClass())class="{{ $labelClass() }}"@endif>{{ $label }}</label>
        <div @if($inputWrapperClass)class="{{ $inputWrapperClass }}"@endif>
            <input id="{{ $id }}" type="search" @if($inputTitle)title="{{ $inputTitle }}"@endif @if($inputClass)class="{{ $inputClass }}"@endif>
            <div @if($buttonWrapperClass)class="{{ $buttonWrapperClass }}"@endif>
                <button type="submit" @if($buttonClass)class="{{ $buttonClass }}"@endif>
                    {{ $button }}
                </button>
            </div>
        </div>
    </div>
</form>
