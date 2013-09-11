<?php
include ("template/hd/acc/H_acc.php");
?>

<!-- ACC -->

<section id="SC_acc_nv" class="FD R4 M20">

    <div class="T_BK1 R4t">
        <h3>Espace Personnel<span>Mes Commandes</span></h3>
    </div>

    <?php
    include ("template/ot/NAV_acc.php");

    $commande_id = $_GET["id"];
    $order = new MDOrder($db);
    $order->setOrderId($commande_id);
    $s = $order->getOrderSummary();
    $d = $order->getOrderDetail();
    $o = $order->getOrderOptions();
    ?>

    <!-- CM2 -->

    <section id="SC_acc_cm2" class="F1 R4 M20">

        <div class="SH">
            <h3 class="BK0 R4t">MF-<?= $s["reference"] ?></h3>	
        </div>

        <!-- COMMAND -->

        <div class="T_CMD2">

            <article>
                <div></div>
                <div>Designation</div>
                <div>Option</div>
                <div>Points</div>
                <div>Prix TTC</div>
            </article>
            <?
            foreach ($d as $detail) {
                ?>            
                <a>
                    <div><img src="css/all/ico.gif"></div>
                    <div><?= $detail["nb_item"] ?> x <?= $detail["nom"] ?></div>
                    <div> 
                        <?
                        foreach ($o as $option) {
                            
                            //$opt_tot .= $option["total_ht_option"]                                    
                            ?>
                            <?= $option["titre"] ?> @ <?= $option["total_ht_option"] ?> €<br>
                            <?
                        }
                        ?>

                    </div>
                    <div> MD</div>
                    <div><?= $detail["total_ht_item"]?> €</div>
                </a>
                <?
            }
            ?>

        </div>

    </section>

    <?php
    include ("template/ft/F_wht.php");
    ?>