<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Forms\Inputs;

use Illuminate\View\Component;
use Illuminate\View\View;

class Email extends Component
{
    public function __construct(
        public string $name,
        public ?string $id = null,
        public ?string $value = null,
    )
    {}

    public function render(): View
    {
        return view('ui::components.forms.inputs.email');
    }

    public function id(): string
    {
        return $this->id ?? $this->name;
    }

    public function value(): mixed
    {
        return old($this->name, $this->value);
    }
}
