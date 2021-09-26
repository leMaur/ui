<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Forms;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class Form extends Component
{
    public function __construct(
        public string $action,
        public string $method = 'POST',
        public bool $hasFiles = false,
    )
    {
        $this->method = Str::upper($method);
    }

    public function render(): View
    {
        return view('ui::components.forms.form');
    }
}
