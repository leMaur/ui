<?php

declare(strict_types=1);

namespace Tests\Components;

class ButtonTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $templates = <<<'HTML'
        <x-ui-button>Homepage</x-ui-button>
        HTML;

        $this->assertComponentMatches($templates);
    }

    /** @test */
    public function it_renders_with_type_submit(): void
    {
        $templates = <<<'HTML'
        <x-ui-button type="submit">Homepage</x-ui-button>
        HTML;

        $this->assertComponentMatches($templates);
    }
}
