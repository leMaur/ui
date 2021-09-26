<?php

declare(strict_types=1);

namespace Tests\Components\Forms\Inputs;

use Tests\Components\ComponentTestCase;

class RadioTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-radio name="credit-card" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_checked(): void
    {
        $template = <<<'HTML'
        <x-ui-radio name="credit-card" checked />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_value(): void
    {
        $template = <<<'HTML'
        <x-ui-radio name="credit-card" value="credit_card" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_old_value(): void
    {
        $this->flashOld(['credit-card' => 'credit_card']);

        $template = <<<'HTML'
        <x-ui-radio name="credit-card" />
        HTML;

        $this->assertComponentMatches($template);
    }
}
