<?php declare(strict_types=1);

namespace Tests\Components;

class ComponentPrefixTest extends ComponentTestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('cms-ui.prefix', 'ui');
    }

    /** @test */
    public function it_may_set_a_prefix(): void
    {
        $template = <<<'HTML'
            <x-ui-layout.html>
                <body>
                    <h1>Hello world!</h1>
                </body>
            </x-ui-layout.html>
            HTML;

        $this->assertComponentMatches($template);
    }
}
