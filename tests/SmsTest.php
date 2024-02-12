<?php

use Mokhosh\Sms\Drivers\Kavenegar;
use Mokhosh\Sms\Enums\SmsProvider;
use Mokhosh\Sms\Facades\Sms;

use function Pest\Laravel\instance;

it('can send sms using kavenegar', function () {
    $kavenegar = Mockery::mock(Kavenegar::class)->makePartial();
    $kavenegar->shouldReceive('handle')->once();

    instance(Kavenegar::class, $kavenegar);

    Sms::use(SmsProvider::Kavenegar)
        ->send('test message')
        ->to('09123456789');
});
