<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Search;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class SearchInput extends Component
{
    public function __construct(
        public string $id,
        public string $action,
        public string $label,
        public string $button,
        public string $method = 'POST',
        public ?string $labelWrapperClass = null,
        public bool $srOnly = true,
        public ?string $labelClass = null,
        public ?string $inputWrapperClass = null,
        public ?string $inputTitle = null,
        public ?string $inputClass = null,
        public ?string $buttonWrapperClass = null,
        public ?string $buttonClass = null,
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.search.search-input');
    }

    public function labelClass(): string|null
    {
        $class = Str::of($this->labelClass . ($this->srOnly ? 'sr-only' : ''))->trim();

        if ($class->isEmpty()) {
            return null;
        }

        return $class->__toString();
    }
}
