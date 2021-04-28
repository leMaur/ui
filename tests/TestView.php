<?php declare(strict_types=1);

namespace Tests;

use Illuminate\View\View;

class TestView
{
    protected View $view;

    protected string $rendered;

    public function __construct(View $view)
    {
        $this->view = $view;
        $this->rendered = $view->render();
    }

    public function __toString(): string
    {
        return $this->rendered;
    }
}
