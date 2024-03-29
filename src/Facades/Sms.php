<?php

namespace Mokhosh\Sms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mokhosh\Sms\SmsManager
 */
class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mokhosh\Sms\SmsManager::class;
    }
}
