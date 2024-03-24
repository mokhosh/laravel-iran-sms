<?php

namespace Mokhosh\Sms;

use Cryptommer\Smsir\Classes\Smsir;
use Kavenegar\KavenegarApi;
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

    public function packageRegistered()
    {
        $this->app->bind(KavenegarApi::class, function () {
            return new KavenegarApi(config('sms.drivers.kavenegar.api_key'));
        });

        $this->app->bind(Smsir::class, function () {
            return new Smsir(
                config('sms.drivers.smsir.from'),
                config('sms.drivers.smsir.api_key'),
            );
        });
    }
}
