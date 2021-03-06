<?php

declare(strict_types=1);

namespace Tests\Components\Layout;

use Tests\Components\ComponentTestCase;

class HtmlTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HMTL'
            <x-ui-html>
                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-html>
            HMTL;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_class(): void
    {
        $template = <<<'HMTL'
            <x-ui-html class="main-layout">
                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-html>
            HMTL;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_csrf_token(): void
    {
        $template = <<<'HMTL'
            <x-ui-html with-csrf>
                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-html>
            HMTL;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_title(): void
    {
        $template = <<<'HMTL'
            <x-ui-html title="Welcome">
                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-html>
            HMTL;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_title_and_csrf(): void
    {
        $template = <<<'HMTL'
            <x-ui-html title="Welcome" with-csrf>
                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-html>
            HMTL;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_head_stack(): void
    {
        $template = <<<'HMTL'
            <x-ui-html>
                @push('head')
                <style>
                    h1 { color: darkseagreen; }
                </style>
                @endpush

                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-html>
            HMTL;

        $this->assertComponentMatches($template);
    }
}
