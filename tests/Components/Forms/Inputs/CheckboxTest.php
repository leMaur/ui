<?php

declare(strict_types=1);

namespace Tests\Components\Forms\Inputs;

use Tests\Components\ComponentTestCase;

class CheckboxTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-checkbox name="save_me" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_old_values(): void
    {
        $template = <<<'HTML'
        <x-ui-checkbox name="save_me" value="true" />
        HTML;

        $this->assertComponentMatches($template);

        $this->flashOld(['save_me' => true]);

        $template = <<<'HTML'
        <x-ui-checkbox name="save_me" />
        HTML;

        $this->assertComponentMatches($template);
    }
}
