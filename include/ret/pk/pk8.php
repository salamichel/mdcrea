<?php
include ("template/hd/nav/H2_ret.php");
$md_page = new mdcreatis($db);
$md_page->setPagePath("include/ret/pk/pk8.php");
$pack1 = $md_page->getSubPage("full_restore");
?>
<div style="background-color: #fff">
    <h1>balise dynamique </h1>
    nom : <?= $pack1["nom"] ?><br>
    tarif : <?= $pack1["prix"] ?><span><sup>€<?= $pack1["decimal"] ?></sup>        
</div>
<!-- PK -->

<section id="SC_ret_pk" class="FD R5 M20">

	<div id="SLD1">

	<div class="sl-slider">

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/P8/P8_1r.jpg">
				<img src="css/ret/P8/P8_1.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/P8/P8_2r.jpg">
				<img src="css/ret/P8/P8_2.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/P8/P8_3r.jpg">
				<img src="css/ret/P8/P8_3.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/P8/P8_4r.jpg">
				<img src="css/ret/P8/P8_4.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/P8/P8_5r.jpg">
				<img src="css/ret/P8/P8_5.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/P8/P8_6r.jpg">
				<img src="css/ret/P8/P8_6.jpg">		
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

	<div class="T_2 CLR">

		<article>

			<div>


			<h1>Full Restaure</h1>
			<h2>Le temps passe et les images se froisses, se détériores, altérant couleurs et détails. Le Pack Full Restaure s'est fixé un but, redonner un second souffle à vos photos d'antan.</h2>
			<p>L'ultime solution pour une restauration complète de vos anciennes photos. Pliures, pixels manquants, déchirures ne deviendront qu'un ancien souvenir.</p>

			</div>

			<div class="HR"></div>

			<div>
				<h1>Le pack au prix total de :</h1>
				<p>€ 11,29 TTC <span>au lieu de </span><span>20,52 €</span></p>
				<a class="BT2 BLUE2 R5" href="#">Commander</a>
			</div>

		</article>

		<aside>

			<ul>
				<li>
					<div>- 50 <span>%</span></div>
					<p>Réduction<span>Pack</span></p>
				</li>
				<li>
					<div>2.<span>39€</span></div>
					<p>Economies<span>Réalisées</span></p>
				</li>
			</ul>

		<ul>
			<h3>Options de ce pack :</h3>
			<li><a href="index.php?page=retouch_G2" class="FHb">
				<h2>Restauration PHOTO<span>Restauration (Niveau 2)</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_B1" class="FHb">
				<h2>Correction COLORIMÉTRIE<span>Chromatique</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_D6" class="FHb">
				<h2>Gommage IMPERFECTIONS<span>Réduction du Bruit</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_D1" class="FHb">
				<h2>Gommage IMPERFECTIONS<span>Yeux rouges</span></h2>
			</a></li>
		</ul>

		</aside>

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