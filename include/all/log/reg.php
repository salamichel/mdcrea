<?php

include ("template/hd/log/H_reg.php");

$formCorrect = true;
$msg = "";

if (isset($_POST) && !empty($_POST) && !empty($_POST["src"])) {

    $k = RandomString();

    $insertData = array("fname" => $_POST["fname"],
        "name" => $_POST["name"],
        "pwd" => md5($_POST["cnx_pass"]),
        "email" => $_POST["cnx_id"],
        "date_inscription" => date("Y-m-d"),
        "cle_securite" => $k,
        "ip_inscription" => $_SERVER["REMOTE_ADDR"],
        "is_actif" => 0,
    );

    if ($db->insert('comptes', $insertData)) {
        include("include/all/log/reg_conf.php");

        //Create a new PHPMailer instance
        $mail = new PHPMailer();
        //Tell PHPMailer to use SMTP
        $mail->IsSMTP();

        $mail->SMTPDebug = $smtp_debug;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = $smtp_host;
        //Set the SMTP port number - likely to be 25, 465 or 587
        $mail->Port = $smtp_port;
        //Set who the message is to be sent from
        $mail->SetFrom($smtp_from, $smtp_from_name);
        //Set who the message is to be sent to
        $mail->AddAddress($_POST["cnx_id"], $_POST["name"] . " " . $_POST["fname"]);
        //Set the subject line
        $mail->Subject = 'Sujet ICI';


        $mail_body = file_get_contents($mail_confirmation);

        $mail_body = str_replace("{conf_link}", "http://" . $_SERVER["HTTP_HOST"] . "/index.php?page=registrer_finished&key=" . $k, $mail_body);

        //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
        $mail->MsgHTML($mail_body);

        //Send the message, check for errors
        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        $formCorrect = false;
        $msg = "email existant";
        include("include/all/log/reg_form.php");
    }
} else {
    include("include/all/log/reg_form.php");
}
?>
<?php

include ("template/ft/F_wht.php");
?>