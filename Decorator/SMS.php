<?php

use Decorator;

class SMS extends Decorator
{
    public function sendMessage (): void
    {
        $this->message->sendMessage();
        // логика отправки по SMS
    }
}