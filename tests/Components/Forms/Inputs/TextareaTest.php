<?php

declare(strict_types=1);

namespace Tests\Components\Forms\Inputs;

use Tests\Components\ComponentTestCase;

class TextareaTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-textarea name="notes" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_rows(): void
    {
        $template = <<<'HTML'
        <x-ui-textarea name="notes" rows="6" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_content(): void
    {
        $template = <<<'HTML'
        <x-ui-textarea name="notes">
            About me
        </x-ui-textarea>
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_old_values(): void
    {
        $this->flashOld(['notes' => 'lorem ipsum']);

        $template = <<<'HTML'
        <x-ui-textarea name="notes" />
        HTML;

        $this->assertComponentMatches($template);
    }
}
