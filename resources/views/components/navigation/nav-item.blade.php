<li {{ $attributes }}>
    @unless($sunItem)
        <a class="{{ $classLink }}"
           href="{{ $href() }}"
           @if($isCurrent())
               aria-current="page"
           @endif
        >
            {{ $value ?? $slot }}
        </a>
    @else
        {{ $subItem }}
    @endunless
</li>
