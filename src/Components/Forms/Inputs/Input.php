<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Forms\Inputs;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class Input extends Component
{
    public function __construct(
        public string $name,
        public ?string $id = null,
        public string $type = 'text',
        public ?string $value = null,
    )
    {
        $this->type = Str::lower($type);
    }

    public function render(): View
    {
        return view('ui::components.forms.inputs.input');
    }

    public function id(): string
    {
        return $this->id ?? $this->name;
    }

    public function value(): string | null
    {
        return old($this->name, $this->value);
    }
}
