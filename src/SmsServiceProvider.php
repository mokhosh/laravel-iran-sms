<?php

namespace Mokhosh\Sms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-iran-sms')
            ->hasConfigFile('sms')
            ->hasMigration('create_sms_logs_table');
    }
}
