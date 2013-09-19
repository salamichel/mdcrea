<?php
include ("template/hd/nav/H2_mov.php");


$md_page = new mdcreatis($db);
$md_page->setPagePath("include/mov/mov_A.php");

$pack1 = $md_page->getSubPage("pack_decouverte");
$pack2 = $md_page->getSubPage("pack_premium");
$pack3 = $md_page->getSubPage("pack_premiumplus");
?>

<!-- A1 -->

<section id="SC_mov_A1">

    <div class="T_BK1r">
        <h2>Pack Famille<span>Seul ou à plusieurs,<br>je crée mes souvenirs et je les graves.</span></h2>
        <p>En famille, entre amis, seul ou à plusieurs. Les moments de notre vie se gravent dans notre mémoire mais nous aimons les revisionner en vidéo. mdcreatis vous offre cette possibilité.</p>
        <a class="BT2 BLUE2 R4" href="index.php?page=movie_devis">Personnalisez votre Pack</a>
    </div>

</section>

<!-- A2 -->

<section id="SC_mov_A2" class="LSt">

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

                    <h1>Pack Découverte</h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>	
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée de la séance correspond au temps total pris par le vidéaste entre le début des premières prises de vue et la dernière.</p>
                    <br><p>• La durée du film comprises dans les packs vous indique la temps total que comprendra votre montage vidéo.</p>
                    <br><p>• Le nombre de musiques dans les packs vous indiques la quantité de chansons que vous pouvez utiliser dans votre montage vidéo.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack1["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack1["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id="frm1" name = "cart" action="index.php?page=movie_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack1["produit_id"] ?>">
                            <a class="BT2 BLUE2 R5" href="#" onclick="document.getElementById('frm1').submit();">Faire une Demande</a>
                        </form>
                    </div>


                </article>

                <aside>

                    <ul>
                        <li><div>1h</div><p>Durée<span>de la Séance</span></p></li>
                        <li><div>3<span>min</span></div><p>Durée<span>du Film</span></p></li>
                        <li><div>2</div><p>Nombre<span>de Musiques</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Extérieur</span></li>
                        <li>Nombre de phrases :<span>4</span></li>
                        <li>Transfert vidéo :<span>Sur internet</span></li>
                        <li>Vidéo sur DVD :<span>Sur demande</span></li>
                        <li>Matériel utilisé :<span>Nikon D90</span></li>
                        <li>Qualité :<span>720p HD</span></li>
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

                    <h1>Pack Premium</h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>	
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée de la séance correspond au temps total pris par le vidéaste entre le début des premières prises de vue et la dernière.</p>
                    <br><p>• La durée du film comprises dans les packs vous indique la temps total que comprendra votre montage vidéo.</p>
                    <br><p>• Le nombre de musiques dans les packs vous indiques la quantité de chansons que vous pouvez utiliser dans votre montage vidéo.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack2["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack2["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id="frm1" name = "cart" action="index.php?page=movie_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack2["produit_id"] ?>">
                            <a class="BT2 BLUE2 R5" href="#" onclick="document.getElementById('frm1').submit();">Faire une Demande</a>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>1h<span>30</span></div><p>Durée<span>de la Séance</span></p></li>
                        <li><div>4<span>min</span></div><p>Durée<span>du Film</span></p></li>
                        <li><div>2 / 3</div><p>Nombre<span>de Musiques</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Extérieur</span></li>
                        <li>Nombre de phrases :<span>4</span></li>
                        <li>Transfert vidéo :<span>Sur internet</span></li>
                        <li>Vidéo sur DVD :<span>Sur demande</span></li>
                        <li>Matériel utilisé :<span>Nikon D90</span></li>
                        <li>Qualité :<span>720p HD</span></li>
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

                    <h1>Pack Premium +</h1>
                    <div class="CLR">
                        <img class="R4" src="css/all/ico.gif">
                        <div>
                            <h4>Dorian Delfour</h3>
                                <h5>MDCREATIS</h4>
                        </div> 
                    </div>	
                    <p>Partez à la découverte de la photographie en pleine nature grâce à ce pack Découverte.</p>
                    <br><p>• La durée de la séance correspond au temps total pris par le vidéaste entre le début des premières prises de vue et la dernière.</p>
                    <br><p>• La durée du film comprises dans les packs vous indique la temps total que comprendra votre montage vidéo.</p>
                    <br><p>• Le nombre de musiques dans les packs vous indiques la quantité de chansons que vous pouvez utiliser dans votre montage vidéo.</p>

                    <div class="HR"></div>

                    <div>
                        <span>le pack au prix total de</span>
                        <span><?= $pack3["prix"] ?></span>
                        <div>
                            <sup>,<?= $pack3["decimal"] ?>€</sup>
                            <sub>TTC</sub>
                        </div>
                        <form id="frm1" name = "cart" action="index.php?page=movie_devis" method="post">
                            <input type="hidden" name="item_id" value ="<?= $pack3["produit_id"] ?>">
                            <a class="BT2 BLUE2 R5" href="#" onclick="document.getElementById('frm1').submit();">Faire une Demande</a>
                        </form>
                    </div>

                </article>

                <aside>

                    <ul>
                        <li><div>2h</div><p>Durée<span>de la Séance</span></p></li>
                        <li><div>5<span>min</span></div><p>Durée<span>du Film</span></p></li>
                        <li><div>3 / 4</div><p>Nombre<span>de Musiques</span></p></li>
                    </ul>

                    <h3>Description du pack :</h3>
                    <ul>
                        <li>Lieu :<span>Agglomération Nantaise</span></li>
                        <li>Endroit :<span>En Extérieur</span></li>
                        <li>Nombre de phrases :<span>4</span></li>
                        <li>Transfert vidéo :<span>Sur internet</span></li>
                        <li>Vidéo sur DVD :<span>Sur demande</span></li>
                        <li>Matériel utilisé :<span>Nikon D90</span></li>
                        <li>Qualité :<span>720p HD</span></li>
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

        </div>
    </div>

</section>

</div>

<?php
include ("template/ft/F_wht.php");
?>