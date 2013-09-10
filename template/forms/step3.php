<?php
include ("template/hd/nav/H2_pic.php");

$order = new MDOrder($db);
$cart = new Panier();
$items = $cart->showCart();

if (!empty($items)) {
    foreach ($items as $i => $item) {
        $order->addProduits(array("produit_id" => $item["id"], "nb_item" => $item["qte"], "prix_ht" => $item["prix"]));
    }
}

//print_r($order);
$id = $order->saveOrder();

$r = $order->getOrderSummary();
//print_r($r);

$r = $order->getOrderDetail();
//print_r($r);

$order->validate();


if (isset($_POST) && !empty($_POST)) {

    $contactInfo = array("type" => $_POST["location"],
        "endroit" => $_POST["place"],
        "lieu" => $_POST["namecity"],
        "nom_lieu" => $_POST["namelocation"],
        "commentaire" => $_POST["comshoot"],
        "compte_id" => $_SESSION["user"]["compte_id"],
        "commande_id" => $_SESSION["order_id"]
    );

    $c = $db->insert("md_contact", $contactInfo);
}
?>

<div class="M980">
    <div id = "third_steps ">

        <h3>Veuillez Sélectionner vos Options.</h3>
        <form action="index.php?page=order_step4" method="post">
            <div class = "form CLR">
                <?
                $options = $db->get("md_options");

                foreach ($options as $option) {
                    ?>
                    <div class = "CLR">
                        <input type = "checkbox" name = "options[]" id = "namecity" value = "<?= $option["option_id"] ?>" />
                        <label for = "namecity"><?= $option["titre"] ?><span> <?= $option["prix_ht"] ?> €</span></label>
                    </div>
                    <?
                }
                ?>


            </div>
            <button id = "submit_third" type = "submit" class = "BT2 BLUE1 R5" name = "submit_third">Suivant</button>

        </form>

    </div>
</div>


<?php
include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>