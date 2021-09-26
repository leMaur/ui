<?php

declare(strict_types=1);

namespace Tests\Components\Forms;

use Tests\Components\ComponentTestCase;

class ErrorTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $this->withViewErrors(['username' => 'invalid username']);

        $template = <<<HTML
        <x-ui-error field="username" class="text-red-600" />
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_can_be_rendered_with_custom_content(): void
    {
        $this->withViewErrors(['username' => ['invalid username', 'need starts with abc']]);

        $template = <<<'HTML'
        <x-ui-error field="username" class="text-red-600">
            <ul>
                @foreach($component->messages($errors) as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-ui-error>
        HTML;

        $this->assertComponentMatches($template);
    }
}
