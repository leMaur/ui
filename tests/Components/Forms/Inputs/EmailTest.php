<?php

declare(strict_types=1);

namespace Tests\Components\Forms\Inputs;

use Tests\Components\ComponentTestCase;

class EmailTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-email name="email" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_old_values(): void
    {
        $template = <<<'HTML'
        <x-ui-email name="email" value="johndoe@example.com" />
        HTML;

        $this->assertComponentMatches($template);

        $this->flashOld(['email' => 'johndoe@example.com']);

        $template = <<<'HTML'
        <x-ui-email name="email" />
        HTML;

        $this->assertComponentMatches($template);
    }
}
