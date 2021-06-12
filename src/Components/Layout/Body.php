<?php

declare(strict_types=1);

namespace Lemaur\CmsUi\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Body extends Component
{
    public function render(): View
    {
        return view('cms-ui::components.layout.body');
    }
}
