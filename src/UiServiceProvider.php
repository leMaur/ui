<?php

declare(strict_types=1);

namespace Lemaur\Ui;

use Illuminate\View\Compilers\BladeCompiler;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('ui')
            ->hasConfigFile('ui-config')
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        parent::bootingPackage();

        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = (string) config('ui.prefix', '');

            foreach ((array) config('ui.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);
            }
        });
    }
}
