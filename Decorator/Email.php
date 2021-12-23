<?php

use Decorator;

class Email extends Decorator
{
    public function sendMessage (): void
    {
        $this->message->sendMessage();
        // логика отправки по Email
    }
}