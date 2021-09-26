<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Forms;

use Illuminate\View\Component;
use Illuminate\View\View;

class Label extends Component
{
    public function __construct(public string $for)
    {}

    public function render(): View
    {
        return view('ui::components.forms.label');
    }
}
