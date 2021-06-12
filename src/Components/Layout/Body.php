<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Body extends Component
{
    public function render(): View
    {
        return view('ui::components.layout.body');
    }
}
