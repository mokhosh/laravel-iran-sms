<?php

namespace Mokhosh\Sms;

use Mokhosh\Sms\Commands\SmsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-iran-sms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-iran-sms_table')
            ->hasCommand(SmsCommand::class);
    }
}
