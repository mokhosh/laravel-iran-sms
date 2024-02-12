<?php

namespace Mokhosh\Sms;

use Illuminate\Support\Manager;
use Mokhosh\Sms\Drivers\Kavenegar;
use Mokhosh\Sms\Enums\SmsProvider;

class Sms extends Manager
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
}
