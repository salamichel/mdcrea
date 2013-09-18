<?php

include ("template/hd/acc/H_acc.php");

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

        //pour chaque item on ajoute les options choisies
        if (!empty($item["options"])) {
            foreach ($item["options"] as $option) {
                $opt = $db->where("option_id", $option["o_id"])
                        ->get("md_options");

                $order->addOptions(array("produit_id" => $item["id"], "option_id" => $option["o_id"], "prix_ht" => $option["o_prix"]));
            }
        }
        
        // on ajoute les contacts
        if (!empty($item["contact"])) {
            $order->addContact($item["contact"]);
        }


        // on ajoute les fichiers
        if (!empty($item["files"])) {
            $order->addFiles($item["files"]);
        }
    }
}


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

<section id="SC_ret_ac4" class="F1 R4 M100">
    <div class="SH">
        <h3 class="BK0 R4t">Titre</h3>	
    </div>
    <div class="T_BK1">
        <h3>Commande Terminée<p>Nous vous remercions d’avoir choisi mdcreatis.com.</p></h3>
    </div>

</section>

<?

include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>