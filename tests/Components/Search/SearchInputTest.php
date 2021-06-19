<?php

declare(strict_types=1);

namespace Tests\Components\Search;

use Tests\Components\ComponentTestCase;

class SearchInputTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_form_class(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                class="form-class" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_method(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                method="GET" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_label_wrapper_class(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                label-wrapper-class="label-wrapper-class" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_label_visible_to_everyone(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                :sr-only="false" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_label_class(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                :sr-only="false"
                label-class="label-class" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_input_wrapper_class(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                input-wrapper-class="input-wrapper-class" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_input_title(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                input-title="title" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_input_class(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                input-class="input-class" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_button_wrapper_class(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                button-wrapper-class="button-wrapper-class" />
            HTML;

        $this->assertComponentMatches($template);
    }

    /** @test */
    public function it_renders_with_custom_button_class(): void
    {
        $template = <<<'HTML'
            <x-ui-search-input
                id="search"
                action="/search"
                label="Search"
                button="Perform Search"
                button-class="button-class" />
            HTML;

        $this->assertComponentMatches($template);
    }
}
