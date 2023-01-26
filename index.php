<?php

require 'vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('5931810413:AAGsLStvDSxP9vJ-kxjwE6YmOb83b-2c5Yk');

$response = $telegram->getMe();

$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();

$response = $telegram->sendMessage([
  'chat_id' => '648005713',
  'text' => ' Id del bot = '.$botId
]);

?>
