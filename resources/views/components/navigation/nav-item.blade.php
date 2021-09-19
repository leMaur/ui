<li {{ $attributes }}>
    @if($href)
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
    @endif
</li>
