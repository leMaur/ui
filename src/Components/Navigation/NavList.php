<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Navigation;

use Illuminate\View\Component;
use Illuminate\View\View;

class NavList extends Component
{
    public function render(): View
    {
        return view('ui::components.navigation.nav-list');
    }
}
