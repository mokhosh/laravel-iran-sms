<?php

namespace Mokhosh\Sms\Drivers;

use Kavenegar\KavenegarApi;

class Kavenegar extends Driver
{
    public function __construct(
        protected KavenegarApi $api,
    ) {
        //
    }

    public function handle(): void
    {
        $this->api->Send($this->from, $this->to, $this->text);
    }
}
