<?php

declare(strict_types=1);

namespace Tests\Components;

use Lemaur\Ui\UiServiceProvider;
use Orchestra\Testbench\TestCase;
use Spatie\Snapshots\MatchesSnapshots;
use Tests\InteractsWithView;

abstract class ComponentTestCase extends TestCase
{
    use InteractsWithView;
    use MatchesSnapshots;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('view:clear');
    }

    protected function getPackageProviders($app): array
    {
        return [UiServiceProvider::class];
    }

    public function assertComponentMatches(string $template, array $data = []): void
    {
        $html = (string) $this->blade($template, $data);

        $this->assertMatchesHtmlSnapshot($html);
    }
}
