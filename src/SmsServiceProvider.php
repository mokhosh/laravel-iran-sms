<?php

namespace Mokhosh\Sms;

use Mokhosh\Sms\Commands\SmsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-iran-sms')
            ->hasConfigFile('sms')
            ->hasViews()
            ->hasMigration('create_laravel-iran-sms_table')
            ->hasCommand(SmsCommand::class);
    }
}
