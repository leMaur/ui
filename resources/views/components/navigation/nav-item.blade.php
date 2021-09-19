<li {{ $attributes }}>
    <a class="{{ $classLink }}"
       href="{{ $href() }}"
       @if($isCurrent())
           aria-current="page"
       @endif
    >
        {{ $value ?? $slot }}
    </a>

    {{ $subItem }}
</li>
