<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Contact form\n\nFrom: $name \nMessage: $message";
$recipient = "296997273@qq.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "感谢您!电子邮件已发送.";

?>