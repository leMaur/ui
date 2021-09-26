<?php

declare(strict_types=1);

namespace Tests\Components\Inputs;

use Tests\Components\ComponentTestCase;

class FormTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
            <x-ui-form action="/">
                <input type="text">
            </x-ui-form>
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_html_with_method_post(): void
    {
        $template = <<<'HTML'
            <x-ui-form action="/" method="post"></x-ui-form>
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_html_with_method_put(): void
    {
        $template = <<<'HTML'
            <x-ui-form action="/" method="put"></x-ui-form>
            HTML;

        $this->assertComponentMatches($template);
    }
}
