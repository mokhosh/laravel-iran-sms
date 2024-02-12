<?php

namespace Mokhosh\Sms\Commands;

use Illuminate\Console\Command;

class SmsCommand extends Command
{
    public $signature = 'laravel-iran-sms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
