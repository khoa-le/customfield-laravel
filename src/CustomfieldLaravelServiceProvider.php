<?php

namespace Khoale\CustomfieldLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Khoale\CustomfieldLaravel\Commands\CustomfieldLaravelCommand;

class CustomfieldLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('customfield-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_customfield-laravel_table')
            ->hasCommand(CustomfieldLaravelCommand::class);
    }
}
