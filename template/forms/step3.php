<?php
include ("template/hd/nav/H2_pic.php");

$cart = new Panier();

if (isset($_POST) && !empty($_POST)) {

    $contactInfo = array("type" => $_POST["location"],
        "endroit" => $_POST["place"],
        "lieu" => $_POST["namecity"],
        "nom_lieu" => $_POST["namelocation"],
        "commentaire" => $_POST["comshoot"],
        "compte_id" => $_SESSION["user"]["compte_id"]
    );

    $cart->addContact($contactInfo);

    //$c = $db->insert("md_contact", $contactInfo);
}
?>

<section id="SC_pic_dv">
    <div id = "third_step">

        <h3>Veuillez Sélectionner vos Options.</h3>
        <form action="index.php?page=cad" method="post">
            <div class = "form CLR">
                <?
                $options = $db->get("md_options");
                $i = 0;
                foreach ($options as $option) {
                    $i++;
                    ?>
                    <div class = "CLR">
                        <input type = "checkbox" name = "options[]" id = "option<?= $i ?>" value = "<?= $option["option_id"] ?>" />
                        <label for = "option<?= $i ?>"><?= $option["titre"] ?><span> <?= $option["prix_ht"] ?> €</span></label>
                    </div>
                    <?
                }
                ?>
            </div>
            <button id = "submit_third" type = "submit" class = "BT2 BLUE1 R5" name = "submit_third">Suivant</button>
        </form>

    </div>

</section>


<?php
include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>