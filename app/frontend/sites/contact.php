<?php

use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'HTML';

$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = 'thelastphantom82@gmail.com';
$mail->Password = "vadh2403";
$mail->SetFrom($sender, "Support From Xreaver");
$mail->AddReplyTo("thelastphantom81@gmail.com", "Support Team");
$mail->AddAddress("thelastphantom82@gmail.com", "Tan");
$mail->Subject = 'Sample Email';
$mail->MsgHTML("<b>Hello</b>");

if(!$mail->Send()){
    $msg = 'Error: '.$mail->ErrorInfo;
}
else{
    $msg = 'Send email successfully!';
}


echo $twig->render('contact.html', [
    'bg_image' => '/assets/img/contact-bg.jpg',
    'site_heading' => 'Contact',
    'sub' => 'Send me something',
    'message' => $msg
]);