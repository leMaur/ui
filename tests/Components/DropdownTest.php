<?php

declare(strict_types=1);

namespace Tests\Components;

class DropdownTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_a_basic_markup(): void
    {
        $template = <<<'HTML'
        <x-ui-dropdown>
            <x-slot name="button">
                click me
            </x-slot>

            <ul>
                <li>first</li>
                <li>second</li>
                <li>third</li>
            </ul>
        </x-ui-dropdown>
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_nav_markup(): void
    {
        $template = <<<'HTML'
        <x-ui-dropdown is-nav>
            <x-slot name="button">
                click me
            </x-slot>

            <ul>
                <li>first</li>
                <li>second</li>
                <li>third</li>
            </ul>
        </x-ui-dropdown>
        HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_attributes(): void
    {
        $template = <<<'HTML'
        <x-ui-dropdown is-nav aria-label="Primary navigation">
            <x-slot name="button">
                click me
            </x-slot>

            <ul>
                <li>first</li>
                <li>second</li>
                <li>third</li>
            </ul>
        </x-ui-dropdown>
        HTML;

        $this->assertComponentMatches($template);
    }
}
