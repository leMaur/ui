<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Search;

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
        public string $labelWrapperClass = '',
        public bool $srOnly = true,
        public string $labelClass = '',
        public string $inputWrapperClass = '',
        public string $inputTitle = '',
        public string $inputClass = '',
        public string $buttonWrapperClass = '',
        public string $buttonClass = '',
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.search.search-input');
    }
}
