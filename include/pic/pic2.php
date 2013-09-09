<?php
include ("template/hd/nav/H2_pic.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/pic/pic2.php");

$openOutdoor= $md_page->getSubPage("OPEN Outdoor");
$openPremium = $md_page->getSubPage("PREMIUM Outdoor");
$openPremiumPlus = $md_page->getSubPage("PREMIUM+ Outdoor");

?>

<!-- PIC1 -->

<section id="SC_pic1">

    <div id="slider-wrapper" class="LSb">
        <div id="SLD2">
            <a href="index.php?page=picture_place1"><img src="css/pic/pic2/B1.jpg" alt=""></a>
            <a href="index.php?page=picture_place1"><img src="css/pic/pic2/B2.jpg" alt=""></a>
            <a href="index.php?page=picture_place1"><img src="css/pic/pic2/B3.jpg" alt=""></a>
        </div>
    </div>

    <div class="T_BK1 LSt">
        <h2>Séance en Extérieur<span>Une odeur de nature.</span></h2>
        <p class="P30_1">Envie d'un souvenir, seul ou à plusieurs ? Profitez le temps d'une journée, demi-journée ou d'un évènement pour graver des souvenirs tout en images pour le plaisir ou développer votre book.</p>
        <a class="BT2 BLUE2 R5" href="index.php?page=picture_devis">Personnalisez votre Séance en Extérieur</a>
    </div>

</section>

<!-- PIC2 -->

<section id="SC_pic2">

    <nav class="NAV_3"> 
        <ul class="tabs CLR">
            <li><a href="#tab_pic1" class="R5t"><?= $openOutdoor["nom"] ?></a></li>
            <li><a href="#tab_pic2" class="R5t"><?= $openPremium["nom"] ?></a></li>
            <li><a href="#tab_pic3" class="R5t"><?= $openPremiumPlus["nom"] ?></a></li>
        </ul>
    </nav>

    <div>  
        <div class="T_3 LSt">

            <div id="tab_pic1" class="CLR">

                <article>

                    <h1>OPEN Outdoor</h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div>
                    </div>
                    <div id="pk-picB1"></div>
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée du shooting correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p>• Le nombre de photos comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p>• Les photos filtres sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $openOutdoor["prix"] ?></span>
                        <div>
                            <sup>,<?= $openOutdoor["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form name = "cart" action="index.php?page=order_step2" method="post">
                            <input type="hidden" name="item_id" value ="<?= $openOutdoor["produit_id"] ?>">
                            <button type="submit" > Faire une Demande </button>
                            <a class="BT2 BLUE2 R5" href="#">Faire une Demande</a>
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

                    <h3>Option du pack :</h3>
                    <ul>
                        <li>Photo supplémentaire :<span>4.99 €</span></li>
                        <li>CD du shooting complet :<span>19.99 €</span></li>
                        <li>DVD supplémentaire :<span>1.99 €</span></li>
                        <li>Tirage photo 10 x 15 :<span>0.99 €</span></li>
                        <li>Tirage photo 20 x 30 :<span>4.99 €</span></li>
                    </ul>

                </aside>

            </div>

            <div id="tab_pic2" class="CLR">

                <article>

                    <h1>PREMIUM Outdoor</h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div>
                    </div>
                    <div id="pk-picB2"></div>
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée du shooting correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p>• Le nombre de photos comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p>• Les photos filtres sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $openPremium["prix"] ?></span>
                        <div>
                            <sup>,<?= $openPremium["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form name = "cart" action="index.php?page=order_step2" method="post">
                            <input type="hidden" name="item_id" value ="<?= $openOutdoor["produit_id"] ?>">
                            <button type="submit" > Faire une Demande </button>
                            <a class="BT2 BLUE2 R5" href="#">Faire une Demande</a>
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

                    <h3>Option du pack :</h3>
                    <ul>
                        <li>Photo supplémentaire :<span>4.99 €</span></li>
                        <li>CD du shooting complet :<span>19.99 €</span></li>
                        <li>DVD supplémentaire :<span>1.99 €</span></li>
                        <li>Tirage photo 10 x 15 :<span>0.99 €</span></li>
                        <li>Tirage photo 20 x 30 :<span>4.99 €</span></li>
                    </ul>

                </aside>

            </div>

            <div id="tab_pic3" class="CLR">

                <article>

                    <h1>PREMIUM+ Outdoor</h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div>
                    </div>
                    <div id="pk-picB3"></div>
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée du shooting correspond au temps total pris par le photographe entre le début des premières prises de vue et le dernier cliché capturé.</p>
                    <br><p>• Le nombre de photos comprises dans les packs vous indique la quantité de clichés retravaillés (retouché) par le photographe.</p>
                    <br><p>• Les photos filtres sont des clichés travaillés par le photographe, donnant à vos photos une atmosphère et des couleurs spéciales.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $openPremiumPlus["prix"] ?></span>
                        <div>
                            <sup>,<?= $openPremiumPlus["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form name = "cart" action="index.php?page=order_step2" method="post">
                            <input type="hidden" name="item_id" value ="<?= $openPremiumPlus["produit_id"] ?>">
                            <button type="submit" > Faire une Demande </button>
                            <a class="BT2 BLUE2 R5" href="#">Faire une Demande</a>
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

                    <h3>Option du pack :</h3>
                    <ul>
                        <li>Photo supplémentaire :<span>4.99 €</span></li>
                        <li>CD du shooting complet :<span>19.99 €</span></li>
                        <li>DVD supplémentaire :<span>1.99 €</span></li>
                        <li>Tirage photo 10 x 15 :<span>0.99 €</span></li>
                        <li>Tirage photo 20 x 30 :<span>4.99 €</span></li>
                    </ul>

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