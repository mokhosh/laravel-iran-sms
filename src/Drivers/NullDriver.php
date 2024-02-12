<?php

namespace Mokhosh\Sms\Drivers;

class NullDriver extends Driver
{
    public function __construct()
    {
        $this->from = '';
    }

    public function handle(): void
    {
    }
}
