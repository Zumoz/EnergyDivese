<?php

$name = $_POST['user_name'];
$lastname = $_POST['user_lastname'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];
$token = "727885791:AAFzYNbnz9DjYFuw_cyffPwK_eueAcGIceY";
$chat_id = "-399445800";
$arr = array(
	'Имя: ' => $name,
	'Фамилия: ' => $lastname,
	'Email: ' => $email,
	'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("http://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	header('Location: index.html');
} else {
	echo "Error";
}
?>

