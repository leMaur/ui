<?php

namespace Lemaur\CmsUi\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Html extends Component
{
    public function __construct(private bool $withCsrf = false)
    {
    }

    public function render(): View
    {
        return view('cms-ui::components.layout.html');
    }

    public function withCsrf(): bool
    {
        return $this->withCsrf;
    }
}
