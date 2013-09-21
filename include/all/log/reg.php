<?php

include ("template/hd/log/H_reg.php");

$smarty = new Smarty;
$smarty->setTemplateDir('template/mails');

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

    if ($db->insert('md_comptes', $insertData)) {
        include("include/all/log/reg_conf.php");

        //Create a new PHPMailer instance
        $mail = new PHPMailer();
        //Set who the message is to be sent from
        $mail->SetFrom($smtp_from, $smtp_from_name);
        //Set who the message is to be sent to
        $mail->AddAddress($_POST["cnx_id"], $_POST["name"] . " " . $_POST["fname"]);
        //Set the subject line
        $mail->Subject = $mail_confirmation_subject;

        $smarty->assign("conf_link", "http://" . $_SERVER["HTTP_HOST"] . $mdfolder . "index.php?page=registrer_finished&key=" . $k);
        $smarty->assign("user", array("name" => $_POST["name"], "fname" => $_POST["fname"], "email" => $_POST["cnx_id"], "pwd" => $_POST["cnx_pass"]));

        $mail_body = $smarty->fetch('welcome.tpl');

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