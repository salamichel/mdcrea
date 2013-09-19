<?php
include ("template/hd/nav/H2_pic.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/pic/pic1.php");

$pack1 = $md_page->getSubPage("open_studio");
$pack2 = $md_page->getSubPage("prem_studio");
$pack3 = $md_page->getSubPage("prem_studioplus");
?>

<!-- PIC1 -->

<section id="SC_pic1">

    <div id="slider-wrapper" class="LSb">
        <div id="SLD2">
            <a href="index.php?page=picture_place1"><img src="css/pic/pic1/A1.jpg" alt=""></a>
            <a href="index.php?page=picture_place1"><img src="css/pic/pic1/A2.jpg" alt=""></a>
            <a href="index.php?page=picture_place1"><img src="css/pic/pic1/A3.jpg" alt=""></a>
        </div>
    </div>

    <div class="T_BK1 LSt">
        <h2>Shooting Studio<span>Le cliché au goût professionnel.</span></h2>
        <p class="P30_1">Envie d'un souvenir, seul ou à plusieurs ? Profitez le temps d'une journée, demi-journée ou d'un évènement pour graver des souvenirs tout en images pour le plaisir ou développer votre book.</p>
        <a class="BT2 BLUE2 R5" href="index.php?page=picture_devis">Personnalisez votre Séance Studio</a>
    </div>

</section>

<!-- PIC2 -->

<section id="SC_pic2">

    <nav class="NAV_3"> 
        <ul class="tabs CLR">
            <li><a href="#tab_pic1" class="R5t"><?= $pack1["nom"] ?></a></li>
            <li><a href="#tab_pic2" class="R5t"><?= $pack2["nom"] ?></a></li>
            <li><a href="#tab_pic3" class="R5t"><?= $pack3["nom"] ?></a></li>
        </ul>
    </nav>

    <div>  
        <div class="T_3 LSt">

            <div id="tab_pic1" class="CLR">

                <article>

                    <h1><?= $pack1["nom"] ?></h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>
                    <div id="pk-picA1"></div>
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée du shooting correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p>• Le nombre de photos comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p>• Les photos filtres sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack1["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack1["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id ="frm1" name = "cart" action="index.php?page=picture_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack1["produit_id"] ?>">
                            <a class="BT2 BLUE2 R5" href="#" onclick="document.getElementById('frm1').submit();">Faire une Demande</a>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>1h</div><p>Durée<span>Shooting</span></p></li>
                        <li><div>5</div><p>Nombre<span>Photos</span></p></li>
                        <li><div>+1</div><p>Photos<span>Filtres</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Extérieur</span></li>
                        <li>Matériel :<span>Nikon D90</span></li>
                        <li>Qualité :<span>3200 x 2800</span></li>
                        <li>Transfert photo :<span>Sur internet</span></li>
                        <li>Photos sur CD :<span>Sur demande</span></li>
                    </ul>

                    <?
                    if (!empty($pack1["options"])) {
                        ?>
                        <h3>Option du pack :</h3>
                        <ul>
                            <?
                            foreach ($pack1["options"] as $option) {
                                ?>
                                <li><?= $option["titre"] ?> :<span><?= $option["prix_ht"] ?> €</span></li>
                                <?
                            }
                            ?>
                        </ul>
                        <?
                    }
                    ?>

                </aside>

            </div>

            <div id="tab_pic2" class="CLR">

                <article>

                    <h1><?= $pack2["nom"] ?></h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div>
                    </div>
                    <div id="pk-picA2"></div>
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée du shooting correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p>• Le nombre de photos comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p>• Les photos filtres sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack2["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack2["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id="frm1" name = "cart" action="index.php?page=picture_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack2["produit_id"] ?>">
                            <button type="submit" > Faire une Demande </button>
                            <a class="BT2 BLUE2 R5" href="#" onclick="document.getElementById('frm1').submit();">Faire une Demande</a>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>1h<span>30</span></div><p>Durée<span>Shooting</span></p></li>
                        <li><div>7</div><p>Nombre<span>Photos</span></p></li>
                        <li><div>+2</div><p>Photos<span>Filtres</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Extérieur</span></li>
                        <li>Matériel :<span>Nikon D90</span></li>
                        <li>Qualité :<span>3200 x 2800</span></li>
                        <li>Transfert photo :<span>Sur internet</span></li>
                        <li>Photos sur CD :<span>Sur demande</span></li>
                    </ul>

                    <?
                    if (!empty($pack2["options"])) {
                        ?>
                        <h3>Option du pack :</h3>
                        <ul>
                            <?
                            foreach ($pack1["options"] as $option) {
                                ?>
                                <li><?= $option["titre"] ?> :<span><?= $option["prix_ht"] ?> €</span></li>
                                <?
                            }
                            ?>
                        </ul>
                        <?
                    }
                    ?>

                </aside>

            </div>

            <div id="tab_pic3" class="CLR">

                <article>

                    <h1><?= $pack3["nom"] ?></h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div>
                    </div>
                    <div id="pk-picA3"></div>
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée du shooting correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p>• Le nombre de photos comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p>• Les photos filtres sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack3["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack3["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id ="frm1" name = "cart" action="index.php?page=picture_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack3["produit_id"] ?>">
                            <button type="submit" > Faire une Demande </button>
                            <a class="BT2 BLUE2 R5" href="#" onclick="document.getElementById('frm1').submit();">Faire une Demande</a>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>2h</div><p>Durée<span>Shooting</span></p></li>
                        <li><div>10</div><p>Nombre<span>Photos</span></p></li>
                        <li><div>+3</div><p>Photos<span>Filtres</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Extérieur</span></li>
                        <li>Matériel :<span>Nikon D90</span></li>
                        <li>Qualité :<span>3200 x 2800</span></li>
                        <li>Transfert photo :<span>Sur internet</span></li>
                        <li>Photos sur CD :<span>Sur demande</span></li>
                    </ul>

                    <?
                    if (!empty($pack3["options"])) {
                        ?>
                        <h3>Option du pack :</h3>
                        <ul>
                            <?
                            foreach ($pack1["options"] as $option) {
                                ?>
                                <li><?= $option["titre"] ?> :<span><?= $option["prix_ht"] ?> €</span></li>
                                <?
                            }
                            ?>
                        </ul>
                        <?
                    }
                    ?>

                </aside>

            </div>

        </div>
    </div>

</section>

</div>

<?php
include ("js/inc/sld2.js");
include ("template/ft/F_blk.php");
?>