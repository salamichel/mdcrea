<?php
include ("template/hd/nav/H2_pic.php");

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Set who the message is to be sent from
$mail->SetFrom($smtp_from, $smtp_from_name);
//Set who the message is to be sent to
$mail->AddAddress($_SESSION["user"]["email"], $_SESSION["user"]["name"] . " " . $_SESSION["user"]["fname"]);
//Set the subject line
$mail->Subject = 'Sujet ICI';
//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body

$mail_body = file_get_contents($mail_order_conf);

$cart = new Panier();
$order = new MDOrder($db);

$orderSummary = $order->getOrderSummary();

$items = $order->getOrderDetail();

$items_list = "";

if (!empty($items)) {
    foreach ($items as $item) {

        $items_list .= 'ref=' . $item["produit_id"] . 'qte=' . $item["nb_item"] . 'prix=' . $item["total_ht_item"];
    } // End of foreach loop!
}

// ajout des options 
if (!empty($_POST["options"])) {
    foreach ($_POST["options"]as $option) {
        $opt = array("commande_id" => $_SESSION["order_id"],
            "option_id" => $option
        );
        $db->insert("commande_options", $opt);
    }
}


$mail_body = str_replace("{items}", $items_list, $mail_body);
//$mail_body = str_replace("{user_information}", $user, $mail_body);
//$mail_body = str_replace("{user_adresse}", $, $mail_body);

$mail->MsgHTML($mail_body);


if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    $order->flush();
    $cart->flush();
}
?>



<div id="fourth_step s">
    <h3>Votre demande personnalisée a bien été envoyée.</h3>
    <button id="submit_fourth" type="submit" class="BT2 BLUE1 R5" name="submit_fourth">Terminer</button>
</div>

<?php
include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>