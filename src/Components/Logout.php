<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Logout extends Component
{
    public function __construct(
        public string $href,
        public string $value,
        public ?string $class = null,
    )
    {}

    public function render(): View
    {
        return view('ui::components.logout');
    }
}
