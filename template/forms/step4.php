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
$items = $cart->showCart();

$order = new MDOrder($db);
$items_list = "";

if (!empty($items)) {
    foreach ($items as $i => $item) {
        $order->addProduits(array("produit_id" => $item["id"], "nb_item" => $item["qte"], "prix_ht" => $item["prix"]));

        $items_list .= 'ref=' . $item["id"] . 'qte=' . $item["qte"] . 'prix=' . $item["prix"];
    }
}

if (!empty($_POST["options"])) {
    foreach ($_POST["options"]as $option) {
        $opt = $db->where("option_id", $option)
                ->get("md_options");

        $order->addOptions(array("option_id" => $option, "prix_ht" => $opt[0]["prix_ht"]));
    }
}

$order->addContact($cart->getContact());

$id = $order->saveOrder();

$order->validate();


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

<section id="SC_pic_dv">
    <div id="fourth_step s">
        <h3>Votre demande personnalisée a bien été envoyée.</h3>
        <button id="submit_fourth" type="submit" class="BT2 BLUE1 R5" name="submit_fourth">Terminer</button>
    </div>
</section>
<?php

include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>