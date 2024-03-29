<?php

namespace Mokhosh\Sms;

use Illuminate\Support\Manager;
use Mokhosh\Sms\Drivers\Kavenegar;
use Mokhosh\Sms\Drivers\NullDriver;
use Mokhosh\Sms\Drivers\SmsIr;
use Mokhosh\Sms\Enums\SmsProvider;

class SmsManager extends Manager
{
    public function use(string|SmsProvider $provider)
    {
        if ($provider instanceof SmsProvider) {
            $provider = $provider->value;
        }

        return $this->driver($provider);
    }

    public function getDefaultDriver()
    {
        return $this->config->get('sms.driver');
    }

    protected function createKavenegarDriver(): Kavenegar
    {
        return $this->container->make(Kavenegar::class);
    }

    protected function createNullDriver(): NullDriver
    {
        return $this->container->make(NullDriver::class);
    }

    protected function createSmsIrDriver(): SmsIr
    {
        return $this->container->make(SmsIr::class);
    }
}
