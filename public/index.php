<?php
require_once 'config.php';

use App\Core\Telegram;
use App\Core\Texts;
use App\Core\User;


$bot_token = '6365117481:AAG_ik94LyIVo-JKBcnrEf6eQ5CLW03lsmk';
$telegram = new Telegram($bot_token);


//$callback_query = $telegram->Callback_Query();
//$callback_data = $telegram->Callback_Data();
//
//$text = $telegram->Text();
//$data = $telegram->getData();
//$chatID = $telegram->ChatID();
//$first_name = $telegram->FirstName();
//$last_name = $telegram->LastName();
//$message_id = $telegram->MessageID();
//
//$user = new User($chatID);
//$texts = new Texts($user->getLanguage());

$new  = new Telegram('341231231');
$user = new User('1729748560');



