<?php
include ("template/hd/nav/H2_ret.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/ret/tk/A1.php");
$p = $md_page->getSubPage("retouch_A1");
?>

<div style="background-color: #fff">
    <h1>balise dynamique </h1>
    nom : <?= $p["nom"] ?><br>
    tarif : <?= $p["prix"] ?><span><sup>€<?= $p["decimal"] ?></sup>        
        <form name = "cart" action="index.php?page=retouch_sp1" method="post">
            <input type="hidden" name="item_id" value ="<?= $p["produit_id"] ?>">
            <button type="submit" > Faire une Demande </button>                
        </form>
</div>


<!-- TCK -->

<section id="SC_ret_tck" class="F1 R5 M20">

    <div id="SLD1">

        <div class="sl-slider">

            <article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="UCP">
                    <img src="css/ret/A1/A1_1r.jpg">
                    <img src="css/ret/A1/A1_1.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="UCP">
                    <img src="css/ret/A1/A1_2r.jpg">
                    <img src="css/ret/A1/A1_2.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="UCP">
                    <img src="css/ret/A1/A1_3r.jpg">
                    <img src="css/ret/A1/A1_3.jpg">		
                </div>
            </article>

            <article class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                <div class="UCP">
                    <img src="css/ret/A1/A1_4r.jpg">
                    <img src="css/ret/A1/A1_4.jpg">		
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

    <div class="T_1 CLR">

        <article>

            <h1>Ouverture DIAPHRAGME</h1>
            <h2>Portrait</h2>
            <p>Cette option a pour but de mettre en valeur un portrait d'une ou plusieurs personnes, d'animaux ou autres. Cette technique crée une faible profondeur de champs en arrière plan (un flou) afin de faire ressortir les sujets au premier plan.</p>
            <ul class="CLR">
                <li><a class="BT2 BLUE2 R4" href="index.php?page=retouch_sp1">RETOUCHER MAINTENANT</a></li>
                <li><a class="BT2 GREY R4" href="index.php?page=formation_devis">FORMATION VIDEO</a></li>
            </ul>

        </article>

        <aside>

            <ul>
                <li>
                    <div>48<span>H</span></div>
                    <p>Réception<span>Retouche</span></p>
                </li>
                <li>
                    <div>3.<span>99€</span></div>
                    <p>Prix<span>Retouche</span></p>
                </li>
            </ul>

            <h3>Choisir une Options de retouche :</h3>
            <ul>
                <li><a href="index.php?page=retouch_A1" class="FHb">Portrait</a></li>
                <li><a href="index.php?page=retouch_A2" class="FHb">Personnalisé</a></li>
            </ul>

        </aside>

    </div>

</section>

<?php
include ("template/ot/SC_ret_tck.php");
include ("js/inc/sld1.js");
include ("js/ucompare.js");
include ("js/inc/liteAccordion.js");
include ("template/ft/F_blk.php");
?>