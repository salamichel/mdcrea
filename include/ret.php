<?php
include ("template/hd/nav/H_ret.php");
?>

<!-- RT -->

<section id="SC_ret_rt" class="F1 R5 M20">
    <div id="SLD1">
        <div class="sl-slider">
            <article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="UCP">
                    <img src="css/ret/idx/N1r.jpg">
                    <img src="css/ret/idx/N1.jpg">		
                </div>
            </article>
            <article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="UCP">
                    <img src="css/ret/idx/N2r.jpg">
                    <img src="css/ret/idx/N2.jpg">		
                </div>
            </article>
        </div>
        <nav id="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
        </nav>

    </div>

    <div class="T_BK1 LSt">
        <h2>Retouche Photo<span>L'élégance fait votre réputation</span></h2>
        <p>La communication est la pierre angulaire de votre réussite. Nous vous proposons de développer l'image de votre entreprise à travers le travail visuel effectué.</p>
        <a class="BT2 BLUE2 R4" href="index.php?page=retouch_dl">Retoucher Maintenant</a>
    </div>

    <div class="T_LS3 CLR">

        <a href="index.php?page=advice1">
            <div>
                <img src="css/all/ico.gif">
            </div>
            <h1>Faire le bon choix</h1>
            <h2>Suite à nos conseils, vous pourrez plus facilement sélectionner vos clichés les plus appropriés pour une retouche de qualité.</h2>
            <p>Lire</p>
        </a>

        <a href="index.php?page=retouch_time">
            <div>
                <img src="css/all/ico.gif">
            </div>
            <h1>Vos retouches en 72H</h1>
            <h2>MDcreatis s’engage à traiter l'intégralité de vos commandes en retouche 							photographique, dans un délai de 72h maximum.</h2>
            <p>En savoir plus</p>
        </a>

        <a href="index.php?page=retouch_A1">
            <div>
                <img src="css/all/ico.gif">
            </div>
            <h1>Nos Tarifs</h1>
            <h2>Découvrez rapidement les tarifs pratiqués par MDcreatis pour son travail effectué sur les techniques et options de retouches.</h2>
            <p>Nos Tarifs</p>
        </a>

    </div>

</section>

<!-- TK -->

<section id="SC_ret_tk" class="F1 R5 M100">

    <?php include ("template/ot/NAV_ret.php"); ?>

    <div class="T_BK1 LSt">
        <h2>Prestations retouche<span>Pour tous les goûts, simplement fait pour vous</span></h2>
        <p>Une multitude de techniques professionnelles en retouche photographique sont utilisées dans le but de répondre à vos demandes et divers besoins.</p>
        <a class="BT2 BLUE2 R4" href="index.php?page=retouch_A1">Découvrir nos Prestations</a>
    </div>

</section>

<!-- PK -->

<section id="SC_ret_pk" class="F1 R5 M100">

    <div class="T_BK1">
        <h2>Packs Retouche<span>Développez vos idées, adaptez vos envies...</span></h2>
        <p>Profitez simplement de nos Packs retouche. Ils sont conçus spécialement pour vous apporter tout ce dont vous avez besoin.</p>
        <a class="BT2 BLUE2 R4" href="index.php?page=pack_professionnel">Découvrez nos Packs</a>
    </div>

    <div class="LSt"><?php include ("template/ot/NAV_pk.php"); ?></div>

</section>

<!-- SCRIPT & FOOTER -->
<?php
include ("js/inc/sld1.js");
include ("js/ucompare.js");
include ("js/inc/sld2.js");
include ("js/inc/liteAccordion.js");
include ("template/ft/F_blk.php");
?>