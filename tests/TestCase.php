<?php

namespace Mokhosh\Sms\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mokhosh\Sms\SmsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mokhosh\\Sms\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SmsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-iran-sms_table.php.stub';
        $migration->up();
        */
    }
}
