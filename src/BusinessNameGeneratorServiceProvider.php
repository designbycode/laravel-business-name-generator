<?php

namespace Designbycode\LaravelBusinessNameGenerator;

use Designbycode\LaravelBusinessNameGenerator\Commands\BusinessNameGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BusinessNameGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-business-name-generator')
            ->hasConfigFile()
            ->hasMigration('create_laravel-business-name-generator_table')
            ->hasCommand(BusinessNameGeneratorCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->app->bind('laravel-business-name-generator', function ($app) {
            return new BusinessNameGenerator();
        });
    }
}
