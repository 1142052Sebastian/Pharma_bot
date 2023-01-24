<?php

use Telegram\Bot\Api;

$Telegram = new Api('5931810413:AAGsLStvDSxP9vJ-kxjwE6YmOb83b-2c5Yk');

$response = $telegram->getMe();

$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();

?>