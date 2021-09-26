<?php

declare(strict_types=1);

namespace Tests\Components\Forms\Inputs;

use Tests\Components\ComponentTestCase;

class PasswordTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-password name="password" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_old_value(): void
    {
        $this->flashOld(['password' => 'abc123']);

        $template = <<<'HTML'
        <x-ui-password name="password" />
        HTML;

        $this->assertComponentMatches($template);
    }
}
