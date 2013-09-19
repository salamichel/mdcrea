<?php
include ("template/hd/nav/H2_ret.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/ret/pk/pk1.php");
$pack1 = $md_page->getSubPage("pack_pro");
?>

<!-- PK -->

<section id="SC_ret_pk" class="F1 R5 M20">

    <div id="SLD1">

        <div class="sl-slider">

            <article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="UCP">
                    <img src="css/ret/P1/P1_1r.jpg">
                    <img src="css/ret/P1/P1_1.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="UCP">
                    <img src="css/ret/P1/P1_2r.jpg">
                    <img src="css/ret/P1/P1_2.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="UCP">
                    <img src="css/ret/P1/P1_3r.jpg">
                    <img src="css/ret/P1/P1_3.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                <div class="UCP">
                    <img src="css/ret/P1/P1_4r.jpg">
                    <img src="css/ret/P1/P1_4.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="UCP">
                    <img src="css/ret/P1/P1_5r.jpg">
                    <img src="css/ret/P1/P1_5.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="UCP">
                    <img src="css/ret/P1/P1_6r.jpg">
                    <img src="css/ret/P1/P1_6.jpg">		
                </div>
            </article>

        </div>

        <nav id="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>

    </div>

    <!-- DESCRIPTION -->

    <div id="ret_PK1" class="CLR">

        <article>
            <h1>Pack <span>PROFESSIONNEL</span></h1>
            <div id="pk-img1"></div>
            <p class="time1">Commande traitée sous : 72h</p>
            <p class="eco1"><span>27,99€ </span>Économisez <span>50%</span> soit <span>13,99€</span></p>
        </article>

        <aside>
            <h2>La solution professionnelle complète réunie dans un pack.</h2>
            <p>Le Pack Professionnel regroupe un panel de retouche complet afin de mettre en valeur vos plus beaux clichés. Donnez à vos photos une touche de professionnalisme et réinventez une façon de vous voir.</p>
            <div class="price1"><p>Le pack au prix de :</p><?= $pack1["prix"] ?><span><sup>€<?= $pack1["decimal"] ?></sup><sub>TTC</sub></span></div>
            <a class="BT4 BLUE2 R5" href="#" onclick="document.getElementById('cart').submit();">Ajouter au Panier<span><img class="BTcad" src="css/all/ico.gif"></span></a>

            <form id="cart" name = "cart" action="index.php?page=pack_step" method="post">
                <input type="hidden" name="item_id" value ="<?= $pack1["produit_id"] ?>">
            </form>

        </aside>

    </div>

    <div class="LSt">

        <div id="ret_PK2">

            <h1>Options incluses</h1>
            <ul class="BK_tk1 CLR">

                <li><a href="index.php?page=retouch_A2" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Ouverture DIAPHRAGME<span>Personnalisé</span></h2>
                            </div>

                            <div>
                                <p class="price2">3<sup>€69</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue2">
                                40 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

                <li><a href="index.php?page=retouch_B1" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Correction COLORIMÉTRIE<span>Chromatique</span></h2>
                            </div>

                            <div>
                                <p class="price2">2<sup>€49</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue2">
                                25 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

            </ul>

            <ul class="BK_tk1 CLR">

                <li><a href="index.php?page=retouch_C1" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Réglage LUMINOSITÉ<span>Complet</span></h2>
                            </div>

                            <div>
                                <p class="price2">1<sup>€29</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue1">
                                15 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

                <li><a href="index.php?page=retouch_D3" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Gommage IMPERFECTIONS<span>Suppression Acné</span></h2>
                            </div>

                            <div>
                                <p class="price2">3<sup>€49</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue2">
                                35 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

            </ul>

            <ul class="BK_tk1 CLR">

                <li><a href="index.php?page=retouch_D4" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Gommage IMPERFECTIONS<span>Lissage de Peau</span></h2>
                            </div>

                            <div>
                                <p class="price2">2<sup>€49</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue2">
                                25 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

                <li><a href="index.php?page=retouch_D6" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Gommage IMPERFECTIONS<span>Réduction du Bruit</span></h2>
                            </div>

                            <div>
                                <p class="price2">1<sup>€99</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue1">
                                20 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

            </ul>

            <ul class="BK_tk1 CLR">

                <li><a href="index.php?page=retouch_D7" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Gommage IMPERFECTIONS<span>Réglage Netteté</span></h2>
                            </div>

                            <div>
                                <p class="price2">1<sup>€99</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue1">
                                20 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

            </ul>

            <h1>Options Offertes</h1>
            <ul class="BK_tk1 CLR">

                <li><a href="index.php?page=retouch_A2" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Gommage IMPERFECTIONS<span>Yeux Rouges</span></h2>
                            </div>

                            <div>
                                <p class="price2">1<sup>€49</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue1">
                                15 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

                <li><a href="index.php?page=retouch_B1" class="FHb">

                        <section class="CLR">
                            <div>
                                <h2>Gommage IMPERFECTIONS<span>Blanchiment des Dents</span></h2>
                            </div>

                            <div>
                                <p class="price2">2<sup>€49</sup></p>
                            </div>
                        </section>

                        <section class="CLR">
                            <div class="BG_blue2">
                                25 <span>Points</span>
                            </div>

                            <div>
                                <p>Effacement de l'effet yeux rouges qui apparait au niveau de la pupille. Effacement de l'effet yeux rouges.</p>
                            </div>
                        </section>

                    </a></li>

            </ul>

        </div>

    </div>

</section>

<!-- NAV -->

<section id="SC_ret_nv" class="F1 R5 M100">

    <div class="R5 LSb"><?php include ("template/ot/NAV_pk.php"); ?></div>

</section>

<?php
include ("js/inc/sld1.js");
include ("js/ucompare.js");
include ("template/ft/F_blk.php");
?>