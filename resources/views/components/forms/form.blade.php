<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!} {{ $attributes }}>
    @csrf
    @method($method)

    {{ $slot }}
</form>
