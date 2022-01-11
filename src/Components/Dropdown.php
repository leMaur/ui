<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Dropdown extends Component
{
    public function __construct(
        public ?string $button = null,
        public bool $isNav = false,
    ){}

    public function render(): View
    {
        return view('ui::components.dropdown');
    }

    public function tag(): string
    {
        return $this->isNav ? 'nav' : 'div';
    }
}
