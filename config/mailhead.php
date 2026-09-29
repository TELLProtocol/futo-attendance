<?php

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "tellprotocol.xyz@gmail.com";
$mail->Password = "oqqmcpigaqriqhjh";
$mail->SMTPSecure = "tls";
$mail->Port = 587;


?>