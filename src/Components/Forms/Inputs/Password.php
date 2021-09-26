<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Forms\Inputs;

use Illuminate\View\Component;
use Illuminate\View\View;

class Password extends Component
{
    public function __construct(
        public string $name,
        public ?string $id = null,
    )
    {}

    public function render(): View
    {
        return view('ui::components.forms.inputs.password');
    }

    public function id(): string
    {
        return $this->id ?? $this->name;
    }
}
