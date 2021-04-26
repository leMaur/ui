<?php

namespace Lemaur\CmsUi;

use Lemaur\CmsUi\Commands\CmsUiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CmsUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('cms-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_cms-ui_table')
            ->hasCommand(CmsUiCommand::class);
    }
}
