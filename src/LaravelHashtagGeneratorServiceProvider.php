<?php

namespace Mdhesari\LaravelHashtagGenerator;

use Mdhesari\LaravelHashtagGenerator\Commands\LaravelHashtagGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHashtagGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-hashtag-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-hashtag-generator_table')
            ->hasCommand(LaravelHashtagGeneratorCommand::class);

        $this->register('laravel-hashtag-generator', LaravelHashtagGenerator::class);
    }
}
