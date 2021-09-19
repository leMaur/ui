<button aria-haspopup="true" aria-controls="{{ $ariaControls }}" {{ $attributes->except(['aria-haspopup', 'aria-controls']) }}>
    {{ $slot }}
</button>
