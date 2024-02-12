<?php

use Illuminate\Support\Facades\Log;
use Mokhosh\Sms\Drivers\Kavenegar;
use Mokhosh\Sms\Enums\SmsProvider;
use Mokhosh\Sms\Facades\Sms;

use function Pest\Laravel\instance;

it('logs sms by default', function () {
    Log::shouldReceive('info')->once()
        ->withArgs(function ($message) {
            return str_contains($message, 'test message')
                && str_contains($message, '09123456789');
        });

    Sms::send('test message')
        ->to('09123456789');
});

it('can send sms using kavenegar', function () {
    $kavenegar = Mockery::mock(Kavenegar::class)->makePartial();
    $kavenegar->shouldReceive('handle')->once();

    instance(Kavenegar::class, $kavenegar);

    Sms::use(SmsProvider::Kavenegar)
        ->send('test message')
        ->to('09123456789');
});
