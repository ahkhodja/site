<?php
   // date_default_timezone_set('Etc/UTC');
 
    require 'PHPMailer/PHPMailerAutoload.php';
 $mail= new PHPMailer();

 

$mail->IsSMTP();
$mail->SMTPAuth   = true;                 
$mail->SMTPSecure = "ssl";                 
$mail->Host ="smtp.gmail.com";     
$mail->Port= 465;
$mail->Username= 'ad.khodja@gmail.com';
$mail->Password='ZARISBZARISB30NS';
$mail->From       = "ad.khodja@gmail.com";
$mail->FromName   = "AJAM OFFICE";
$mail->Subject    = "This is the subject";


$mail->AddAddress("ad.khodja@gmail.com");
$mail->AddCC('n.bareche@csc.dz');

$mail->IsHTML(true); 
$mail->WordWrap   = 50; 
$mail->IsHTML(true);
$body = "<p>Salut tout le <u>monde</u>,
voici un mail en <b>HTML</b></p>";
$mail->MsgHTML($body);
 
 
 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}
 
?> 
