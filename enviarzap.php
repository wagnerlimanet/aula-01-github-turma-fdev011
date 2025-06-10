<?php
require_once("phpmailer/PHPMailerAutoload.php");

$mail = new PHPMailer();


$mail->IsSMTP();
$mail->Host = "smtp.pixelsescola.com";
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = false;
$mail->Username = 'enviandooleadsdosite@pixelsescola.com';
$mail->Password = '#Pixels@445';

// Dados do Remetente
$mail->Sender = "enviandooleadsdosite@pixelsescola.com";
$mail->From = $_POST['email'];
$mail->FromName = "LEAD (FUSTECH SITE)";

// Dados do destinatário
$mail->AddAddress('sejapixels@pixelsescola.com', 'PIXELS 4.0');

$mail->IsHTML(true);
$mail->CharSet = 'utf-8';

// Definição da Mensagem
$mail->Subject  = "Whatsapp" . $_POST['whatsapp'];
$mail->Body .= "Cadastro efetuado no site.";
$mail->Body .= "".nl2br($_POST['mensagem'])."<br><br><hr>";
$mail->Body .= "LEAD (FUSTECH SITE) - " . $_POST['whatsapp']. "<br>";


$enviado = $mail->Send();
$mail->ClearAllRecipients();

if ($enviado) {
  header( "Location: https://api.whatsapp.com/send?phone=558531041414&text=Acabei%20de%20me%20inscrever%20no%20site%20da%20Fustech%20e%20gostaria%20de%20dar%20continuidade%20ao%20atendimento%20pelo%20zap." );
  	exit();
} else {
  header( "Location: http://www.pixelsescola.com/ERRO" );
  	exit();
}
