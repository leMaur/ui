<?php

declare(strict_types=1);

namespace Tests\Components\Forms;

use Tests\Components\ComponentTestCase;

class FormTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-form action="http://localhost"></x-ui-form>
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_method_get(): void
    {
        $template = <<<'HTML'
        <x-ui-form method="get" action="http://localhost"></x-ui-form>
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_method_put(): void
    {
        $template = <<<'HTML'
        <x-ui-form method="put" action="http://localhost"></x-ui-form>
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_for_file_uploads(): void
    {
        $template = <<<'HTML'
        <x-ui-form method="put" action="http://localhost" has-files></x-ui-form>
        HTML;

        $this->assertComponentMatches($template);
    }
}
