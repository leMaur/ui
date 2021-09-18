<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ $attributes->class(['no-js']) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    @if($title())
        <title>{{ $title() }}</title>
    @endif

    {{ $head ?? '' }}

    @if($withCsrf())
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endif

    <script type="module">
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    @stack('head')
</head>
{{ $slot }}
@stack('body')
</html>
