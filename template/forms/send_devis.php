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


$cart = new Panier();
$cart->addItem(1, 1, 0);

$order = new MDOrder($db);

$items = $cart->showCart();

if (!empty($items)) {
    foreach ($items as $i => $item) {
        $order->addProduits(array("produit_id" => $item["id"], "nb_item" => $item["qte"], "prix_ht" => $item["prix"]));
        
    }
}


$id = $order->saveOrder();

//print_r($order);
        
$order->validate();

// commande

$contactInfo = array("type" => $_POST["location"],
    "endroit" => $_POST["place"],
    "lieu" => $_POST["namecity"],
    "prestation" => "Film",
    "nom_lieu" => $_POST["namelocation"],
    "commentaire" => $_POST["comshoot"],
    "duree_seance" => $_POST["duree_seance"],
    "duree_film" => $_POST["duree_film"],
    "nb_musiques" => $_POST["nb_musiques"],
    "nb_phrases" => $_POST["nb_phrases"],
    "compte_id" => $_SESSION["user"]["compte_id"],
    "commande_id" => $_SESSION["order_id"]
);

$c = $db->insert("md_contact", $contactInfo);







$mail_body = file_get_contents($mail_order_conf);

// ajout des options 
if (!empty($_POST["options"])) {
    foreach ($_POST["options"]as $option) {
        $opt = array("commande_id" => $_SESSION["order_id"],
            "option_id" => $option
        );
        $db->insert("md_commande_options", $opt);
    }
}


//$mail_body = str_replace("{items}", $items_list, $mail_body);
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

<div class="M980">

    <div id="fourth_step s">
        <h3>Votre demande personnalisée a bien été envoyée.</h3>
        <button id="submit_fourth" type="submit" class="BT2 BLUE1 R5" name="submit_fourth">Terminer</button>
    </div>
</div>

<?php
include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>