<?php

include ("template/hd/nav/H2_pic.php");

//panier
//$cart = new ShoppingCart();
$cart = new Panier();

if (isset($_POST) && !empty($_POST["item_id"])) {
    // quantité
    $nb = 1;
    $id = $_POST["item_id"];
    $_SESSION["pid"] = $id;

    $r = $db->where("produit_id", $id)
            ->get("md_produits");

    if (!empty($_POST["nb"]))
        $nb = $_POST["nb"];

    $cart->addItem($id, $nb, $r[0]["prix_ht"]);
}
?>

<section id="SC_pic_dv">
    <div id = "second_step" class = "CLR">

        <h3>Veuillez indiquer le Lieu de la Séance.</h3>
        <form action="index.php?page=order_step3" method="post">

            <div class = "form CLR">
                <div class = "CLR">
                    <label for = "location">Type de demande :</label>
                    <select id = "location" name = "location">
                        <option>Particulier</option>
                        <option>Entreprise</option>
                        <option>Evénement</option>
                        <option>Reportage</option>
                    </select>
                </div>

                <div class = "CLR">
                    <label for = "location">Endroit de la séance :</label>
                    <select id = "location" name = "place">
                        <option>Studio</option>
                        <option>Extérieur</option>
                        <option>Intérieur</option>
                        <option>Domicile</option>
                        <option>Autre</option>
                    </select>
                </div>

                <div class = "CLR">
                    <label for = "namecity">Lieu de la séance :</label>
                    <input type = "text" name = "namecity" id = "namecity" placeholder = "Nom de la ville" />
                </div>

                <div class = "CLR">
                    <label for = "namelocation">Nom de l'endroit :</label>
                    <input type="text" name="namelocation" id="namelocation" placeholder="Nom du lieu" />
                </div>

                <div class="CLR">
                    <textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
                </div>
            </div>
            <button id="submit_second" type="submit" class="BT2 BLUE1 R5" name="submit_second">Suivant</button>
        </form>
    </div>
</section>
<?php

include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>