<?php
include ("template/hd/acc/H_acc.php");

$user = $_SESSION["user"];
?>

<!-- ACC -->

<section id="SC_acc_nv" class="FD R4 M20">

    <div class="T_BK1 R4t">
        <h3>Espace Personnel<span>Mes Commandes</span></h3>
    </div>

    <?php
    include ("template/ot/NAV_acc.php");
    ?>

    <!-- CM1 -->

    <section id="SC_acc_cm1" class="F1 R4 M20">

        <div class="SH">
            <h3 class="BK0 R4t">MES COMMANDES</h3>	
        </div>

        <!-- COMMAND -->

        <div class="T_CMD1">

            <article>
                <div>Référence</div>
                <div>Prestation</div>
                <div>Date</div>
                <div>Statut</div>
                <div>Points</div>
                <div>Prix TTC</div>
                <div></div>
            </article>

            <?
            $r = $db->where("compte_id", $user["compte_id"])
                    ->where("status_id", 1)
                    ->get("commandes");

            foreach ($r as $commande) {
                ?>

                <a href="index.php?page=cm2&id=<?= $commande["commande_id"] ?>">
                    <div><?= $commande["reference"] ?></div>
                    <div>Retouche</div>
                    <div><?= $commande["date_ajout"] ?></div>
                    <div><?= $commande["status_id"] ?></div>
                    <div><?= $commande["point_fidelite"] ?></div>
                    <div><?= $commande["total_ht"] ?> €</div>
                    <div>voir</div>
                </a>
                <?
            }
            ?>


        </div>

    </section>

    <section id="SC_acc_hi" class="F1 R4 M20">

        <div class="SH">
            <h3 class="BK0 R4t">HISTORIQUE</h3>	
        </div>

        <!-- HISTORY -->

        <div class="T_CMD1">

            <article>
                <div>Référence</div>
                <div>Prestation</div>
                <div>Date</div>
                <div>Statut</div>
                <div>Points</div>
                <div>Prix TTC</div>
                <div></div>
            </article>

            <a href="#">
                <div>MF-F23091985</div>
                <div>Retouche</div>
                <div>20-01-2012</div>
                <div>En Attente</div>
                <div>23 MD</div>
                <div>3.49€</div>
                <div>voir</div>
            </a>
            <a href="#">
                <div>MF-F23091985</div>
                <div>Design</div>
                <div>18-01-2012</div>
                <div>En Cours</div>
                <div>23 MD</div>
                <div>149.99€</div>
                <div>voir</div>
            </a>
            <a href="#">
                <div>MF-F23091985</div>
                <div>Retouche</div>
                <div>18-01-2012</div>
                <div>En Cours</div>
                <div>23 MD</div>
                <div>1.99€</div>
                <div>voir</div>
            </a>
            <a href="#">
                <div>MF-F23091985</div>
                <div>Retouche</div>
                <div>20-01-2012</div>
                <div>En Attente</div>
                <div>23 MD</div>
                <div>3.49€</div>
                <div>voir</div>
            </a>
            <a href="#">
                <div>MF-F23091985</div>
                <div>Design</div>
                <div>18-01-2012</div>
                <div>En Cours</div>
                <div>23 MD</div>
                <div>149.99€</div>
                <div>voir</div>
            </a>
            <a href="#">
                <div>MF-F23091985</div>
                <div>Retouche</div>
                <div>18-01-2012</div>
                <div>En Cours</div>
                <div>23 MD</div>
                <div>1.99€</div>
                <div>voir</div>
            </a>

        </div>

    </section>

    <?php
    include ("template/ft/F_wht.php");
    ?>