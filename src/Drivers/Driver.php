<?php

namespace Mokhosh\Sms\Drivers;

abstract class Driver
{
    protected string $from;

    protected string $to;

    protected string $text;

    abstract public function handle(): void;

    public function send(string $message): self
    {
        return $this;
    }

    public function to(string $mobile): void
    {
        $this->to = $mobile;

        $this->handle();
    }
}
