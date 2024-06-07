<?php
use PHPMAILER\PHPMailer\PHPMailer;
use PHPMAILER\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/phpmailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
	$mail = new PHPMAILER(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'dcck801@gmail.com';
	$mail->Password = 'qnhv xiux njzx djbd';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;


	$mail->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ]
];



	$mail->setFrom('dcck801@gmail.com');

	$mail->addAddress($_POST["email"]);

	$mail->isHTML(true);


	$mail->Subject = $_POST["Subject"];	
	$mail->Body = $_POST["message"];

	$mail->Send();

	echo
	"
	<Script>
	alert('Sent Successfully');
	document.location.href = 'index.php';
	</Script>

	";






}
?>