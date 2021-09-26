<?php

declare(strict_types=1);

namespace Tests\Components\Forms;

use Tests\Components\ComponentTestCase;

class LabelTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
        <x-ui-label for="username">
            Username
        </x-ui-label>
        HTML;

        $this->assertComponentMatches($template);
    }
}
