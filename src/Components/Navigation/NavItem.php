<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Navigation;

use Illuminate\Support\Facades\URL;
use Illuminate\View\Component;
use Illuminate\View\View;

class NavItem extends Component
{
    public function __construct(
        public ?string $href = null,
        public ?string $value = null,
        public ?string $classLink = null,
    )
    {}

    public function render(): View
    {
        return view('ui::components.navigation.nav-item');
    }

    public function href(): string
    {
        return URL::isValidUrl($this->href) ? $this->href : route($this->href);
    }

    public function isCurrent(): bool
    {
        return URL::current() === $this->href();
    }
}
