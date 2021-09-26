<form action="{{ $action }}" method="{{ $baseMethod() }}" {{ $attributes }}>
    @if($csrf())
        @csrf
    @endif
    @if($method())
        @method($method())
    @endif
    {{ $slot }}
</form>
