<?php

namespace Lemaur\CmsUi;

use Illuminate\View\Compilers\BladeCompiler;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CmsUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('cms-ui')
            ->hasConfigFile()
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        parent::bootingPackage();

        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = (string) config('cms-ui.prefix', '');

            foreach ((array) config('cms-ui.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);
            }
        });
    }
}
