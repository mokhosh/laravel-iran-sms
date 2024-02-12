<?php

namespace Mokhosh\Sms\Drivers;

use Illuminate\Support\Facades\Log as LogFacade;

class Log extends Driver
{
    public function __construct()
    {
        $this->from = '';
    }

    public function handle(): void
    {
        LogFacade::info(
            <<<SMS
            Sms from: $this->from
            To: $this->to
            Message: $this->text
            SMS
        );
    }
}
