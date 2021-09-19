<form method="POST" action="{{ $href }}">
    @csrf

    <button type="submit" class="{{ $class }}">
        {{ $value }}
    </button>
</form>
