<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Forms\Inputs;

use Illuminate\View\Component;
use Illuminate\View\View;

class Textarea extends Component
{
    public function __construct(
        public string $name,
        public ?string $id = null,
        public int $rows = 3,
    )
    {}

    public function render(): View
    {
        return view('ui::components.forms.inputs.textarea');
    }

    public function id(): string
    {
        return $this->id ?? $this->name;
    }
}
