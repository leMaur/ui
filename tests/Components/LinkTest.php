<?php

declare(strict_types=1);

namespace Tests\Components;

class LinkTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $templates = <<<'HTML'
        <x-ui-link href="/home">Homepage</x-ui-link>
        HTML;

        $this->assertComponentMatches($templates);
    }
}
