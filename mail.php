
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/autoload.php';


$mail = new PHPMailer(true);


//$mail -> SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='kermache11@gmail.com';
$mail->Password='kpwdcfmjnfclekiy';//in google serch application password:create name: code with no space
$mail->SMTPSecure='ssl';
$mail->Port=465;

$mail ->isHTML(true);$mail->CharSet="UTF-8";