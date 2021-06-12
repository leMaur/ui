<?php

declare(strict_types=1);

namespace Tests\Components\Layout;

use Tests\Components\ComponentTestCase;

class BodyTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
            <x-body>
                <h1>Hello world!</h1>
            </x-body>
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_class(): void
    {
        $template = <<<'HTML'
            <x-body class="min-h-screen">
                <h1>Hello world!</h1>
            </x-body>
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_body_stack(): void
    {
        $template = <<<'HTML'
            <x-body class="min-h-screen">
                <h1>Hello world!</h1>

                @push('body')
                <script>
                    document.querySelector('h1')
                </script>
                @endpush
            </x-body>
            HTML;

        $this->assertComponentMatches($template);
    }
}
