<li {{ $attributes }}>
    @unless($href && ($value || $slot))
        <a class="{{ $classLink }}"
           href="{{ $href() }}"
           @if($isCurrent())
               aria-current="page"
           @endif
        >
            {{ $value ?? $slot }}
        </a>
    @else
        {{ $slot }}
    @endunless
</li>
