<?php

$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];

// адрес отправителя
$fromMail = 'admin@marks.su';
$fromName = 'marks.su Форма';

// Формат письма
$emailTo = 'admin@marks.su';
$subject = 'Форма обратной связи с сайта marks.su Форма';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// Тело письма
$body = "Получено письмо с сайта marks.su \nИмя: $name \nE-mail: $email\nСообщение: $message";

// Проверка на пустоту
mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
header('Location: http://www.marks.su/#contact');
exit;

?>