<?php

declare(strict_types=1);

namespace Tests\Components;

class ComponentPrefixTest extends ComponentTestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('ui.prefix', 'ui');
    }

    /** @test */
    public function it_may_set_a_prefix(): void
    {
        $template = <<<'HTML'
            <x-ui-html>
                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-html>
            HTML;

        $this->assertComponentMatches($template);
    }
}
