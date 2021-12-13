<form
    @if ($action)
    action="{{ $action }}"
    @endif
    @if ($method)
    method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
    @endif
    {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!}
    {{ $attributes }}
>
    @if ($action)
    @csrf
    @endif
    @if ($method)
    @method($method)
    @endif

    {{ $slot }}
</form>
