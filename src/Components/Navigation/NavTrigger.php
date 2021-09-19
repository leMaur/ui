<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Navigation;

use Illuminate\View\Component;
use Illuminate\View\View;

class NavTrigger extends Component
{
    public function __construct(
        public string $ariaControls,
    )
    {}

    public function render(): View
    {
        return view('ui::components.navigation.nav-trigger');
    }
}
