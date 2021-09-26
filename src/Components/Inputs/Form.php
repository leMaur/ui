<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Inputs;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class Form extends Component
{
    public function __construct(
        public string $action,
        public string $method = 'GET',
        public bool $withCsrf = true
    )
    {
        $this->method = Str::upper($this->method);
    }

    public function render(): View
    {
        return view('ui::components.inputs.form');
    }

    public function csrf(): bool
    {
        return $this->withCsrf && csrf_token();
    }

    public function method(): string | null
    {
        if (collect(['GET', 'POST'])->containsStrict($this->method)) {
            return null;
        }

        return $this->method;
    }

    public function baseMethod(): string
    {
        if ($this->method === 'GET') {
            return 'GET';
        }

        return 'POST';
    }
}
