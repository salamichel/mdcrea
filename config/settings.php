<?php

$bdd_host = "localhost";
$bdd_user = "root";
$bdd_pwd = "";
$bdd_name = "mdcreatis";

$smtp_from = "stephane.alamichel@gmail.com";
$smtp_from_name = "Stéphane Alamichel";
$smtp_host = "smtp.orange.fr";
$smtp_port = 25;
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$smtp_debug = 0;

//mails
$mail_confirmation = "template/mails/welcome.html";
$mail_lpw= "template/mails/lpw.html";
$mail_order_conf= "template/mails/mail_order_conf.html";
$mdfolder="/mdcreatis/";
?>
