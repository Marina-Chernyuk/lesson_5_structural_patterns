<?php

use Decorator;

class Telegram extends Decorator
{
    public function sendMessage (): void
    {
        $this->message->sendMessage();
        // логика отправки через Telegram
    }
}