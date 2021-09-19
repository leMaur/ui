<li {{ $attributes }}>
    @unless($href && $value)
        <a class="{{ $classLink }}"
           href="{{ $href }}"
           @if($isCurrent())
               aria-current="page"
           @endif
        >
            {{ $value }}
        </a>
    @else
        {{ $slot }}
    @endunless
</li>
