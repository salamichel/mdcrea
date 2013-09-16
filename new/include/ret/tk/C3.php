<?php
include ("template/hd/nav/H2_ret.php");
?>

<!-- TCK -->

<section id="SC_ret_tck" class="F1 R5 M20">

	<div id="SLD1">

	<div class="sl-slider">

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/C3/C3_1r.jpg">
				<img src="css/ret/C3/C3_1.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/C3/C3_2r.jpg">
				<img src="css/ret/C3/C3_2.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/C3/C3_3r.jpg">
				<img src="css/ret/C3/C3_3.jpg">		
			</div>
		</article>

	</div>

	<nav id="nav-dots">
		<span class="nav-dot-current"></span>
		<span></span>
	</nav>

	</div>

	<div class="T_1 CLR">

		<article>

			<h1>Réglage LUMINOSITÉ</h1>
			<h2>Correction Flash</h2>
			<p>Trop souvent, lors d'une photo prise avec un flash, le sujet se retrouve avec une couleur de peau blanche. Nous corrigeons cet effet en redonnant une couleur de peau naturelle et en faisant réapparaitre les détails.</p>
			<ul class="CLR">
				<li><a class="BT2 BLUE2 R4" href="index.php?page=retouch_step1">RETOUCHER MAINTENANT</a></li>
				<li><a class="BT2 GREY R4" href="index.php?page=formation_devis">FORMATION VIDEO</a></li>
			</ul>

		</article>

		<aside>

			<ul>
				<li>
					<div>24<span>H</span></div>
					<p>Réception<span>Retouche</span></p>
				</li>
				<li>
					<div>2.<span>99€</span></div>
					<p>Prix<span>Retouche</span></p>
				</li>
			</ul>

			<h3>Choisir une Options de retouche :</h3>
			<ul>
				<li><a href="index.php?page=retouch_C1" class="FHb">Augmentation Lumineuse</a></li>
				<li><a href="index.php?page=retouch_C2" class="FHb">Réduction Lumineuse</a></li>
				<li><a href="index.php?page=retouch_C3" class="FHb">Correction Flash</a></li>
				<li><a href="index.php?page=retouch_C4" class="FHb">Contre Jour</a></li>
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