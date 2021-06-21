<?php

declare(strict_types=1);

namespace Lemaur\Ui\Components\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Html extends Component
{
    public function __construct(public bool $withCsrf = false, public ?string $title = null)
    {
    }

    public function render(): View
    {
        return view('ui::components.layout.html');
    }

    public function withCsrf(): bool
    {
        return $this->withCsrf;
    }

    public function title(): ?string
    {
        return $this->title;
    }
}
