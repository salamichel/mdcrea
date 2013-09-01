<?php
include ("template/hd/log/H_reg.php");
?>

<?
if (isset($_POST)) {

    $k = RandomString();

    $insertData = array("fname" => $_POST["fname"],
        "name" => $_POST["name"],
        "pwd" => md5($_POST["regPW"]),
        "email" => $_POST["regID"],
        "date_inscription" => date("Y-m-d"),
        "cle_securite" => $k,
        "ip_inscription" => "12345678",
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
        $mail->AddAddress($_POST["regID"], $_POST["name"] . " " . $_POST["fname"]);
        //Set the subject line
        $mail->Subject = 'Sujet ICI';


        $mail_body = file_get_contents($mail_confirmation);

        $mail_body = str_replace("{conf_link}", "http://" . $_SERVER["HTTP_HOST"] . "/index.php?page=registrer_finished&key=" . $k, $mail_body);

        //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
        $mail->MsgHTML($mail_body);

        //Send the message, check for errors
        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }
} else {
    ?>

    <!-- REGISTRER -->

    <section class="SH">
        <div id="SC_reg" class="BK0 R4 M20 CLR">

            <article class="SHl">

                <h2>Créer un compte MDcreatis</h2>
                <p>Un e-mail vous sera envoyé pour confirmer votre inscription.</p>

            </article>

            <article class="SHr">

                <h2>Veuillez saisir les informations suivantes.</h2>
                <form action="index.php?page=registrer" method="post">

                    <div class="CLR">
                        <input type="text"	name="fname" id="fname" placeholder="Prénom" required="required">
                        <input type="text"	name="name" id="name" placeholder="Nom" required="required">
                    </div>
                    <div>
                        <input type="email"	name="regID" id="regID" placeholder="Adresse Email" required="required">
                        <input type="password" name="regPW" id="regPW" placeholder="Mot de passe" required="required">
                    </div>
                    <div>
                        <input type="checkbox" value="yes" name="regTM" id="regTM"  required="required">
                        <span>
                            J'accepte les <a target="_blank" href="index.php?page=conditions">Conditions générales</a> 						MDcreatis.com
                        </span>
                    </div>
                    <div>
                        <input  type="submit" class="BT2 BLUE2 R4" name="valid" value="S'inscrire" />
                    </div>

                </form>

            </article>

        </div>
    </section>
    <?
}
?>
<?php
include ("template/ft/F_wht.php");
?>