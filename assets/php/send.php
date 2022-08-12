<?php

/* https://api.telegram.org/bot5574517465:AAF7BA1tqvNpjBYRXvV9CaHspOEimkq3mv8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "5574517465:AAF7BA1tqvNpjBYRXvV9CaHspOEimkq3mv8";
$chat_id = "-1001649415545";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Опыт:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>