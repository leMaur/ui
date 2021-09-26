<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    public function __construct(public string $type = 'button')
    {}

    public function render(): View
    {
        return view('ui::components.button');
    }
}
