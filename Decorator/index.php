<?php

use IMesasge;
use Message;
use SMS;
use Email;
use Telegram;

$messageSMS = new SMS(new Message);
$messageEmail = new Email(new Message);
$messageTelegram = new Telegram(new Message);

$messageSmsEmail = new Email(new SMS(new Message));
$messageSmsTelegram = new Telegram(new SMS(new Message));
$messageEmailTelegram = new Telegram(new Email(new Message));

$messageAll = new Telegram(new Email(new SMS(new Message)));

$messageSMS->sendMessage();
$messageEmail->sendMessage();
$messageTelegram->sendMessage();

$messageSmsEmail->sendMessage();
$messageSmsTelegram->sendMessage();
$messageEmailTelegram->sendMessage();

$messageAll->sendMessage();