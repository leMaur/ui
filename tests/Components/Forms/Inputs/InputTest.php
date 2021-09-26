<?php

declare(strict_types=1);

namespace Tests\Components\Forms\Inputs;

use Tests\Components\ComponentTestCase;

class InputTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-input name="username" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_type_password(): void
    {
        $template = <<<'HTML'
        <x-ui-input name="password" type="password" autocomplete="current-password" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_old_values(): void
    {
        $template = <<<'HTML'
        <x-ui-input name="username" value="johndoe" />
        HTML;

        $this->assertComponentMatches($template);
    }
}
