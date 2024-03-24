<?php

namespace Mokhosh\Sms\Drivers;

use Cryptommer\Smsir\Classes\Smsir as Api;
use Cryptommer\Smsir\Objects\Parameters;

class SmsIr extends Driver
{
    public function __construct(
        protected Api $api,
    ) {

    }

    public function handle(): void
    {
        $this->api->Send()->LikeToLike(
            [$this->text],
            [$this->to],
        );
    }

    public function verify(string $number, int $template, ?array $parameters = null): void
    {
        $parameters = collect($parameters)->map(function ($value, $key) {
            return new Parameters($key, $value);
        })->values()->toArray();

        $this->api->Send()->Verify($number, $template, $parameters);
    }
}
