<?php

namespace Tests\Components\Search;

use Tests\Components\ComponentTestCase;

class FilterTest extends ComponentTestCase
{
    /** @test */
    public function it_renders_html(): void
    {
        $template = <<<'HTML'
            <x-ui-search-filter
                id="search-filter"
                action="/search"
                :filters="[
                    ['name' => 'First Filter', 'items' => [['name' => 'One', 'slug' => 'one'], ['name' => 'Two', 'slug' => 'two'], ['name' => 'Three', 'slug' => 'three']]],
                    ['name' => 'Second Filter', 'items' => [['name' => 'One', 'slug' => 'one'], ['name' => 'Two', 'slug' => 'two'], ['name' => 'Three', 'slug' => 'three']]],
                    ['name' => 'Third Filter', 'items' => [['name' => 'One', 'slug' => 'one'], ['name' => 'Two', 'slug' => 'two'], ['name' => 'Three', 'slug' => 'three']]],
                ]">
                    <x-slot name="title">Filter</x-slot>
                    <x-slot name="button">apply</x-slot>
                </x-ui-search-filter>
            HTML;

        $this->assertComponentMatches($template);
    }
}
