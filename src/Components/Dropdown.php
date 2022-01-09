<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Dropdown extends Component
{
    public function render(): View
    {
        return view('ui::components.dropdown');
    }
}
