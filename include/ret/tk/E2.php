<?php
include ("template/hd/nav/H2_ret.php");
?>

<!-- TCK -->

<section id="SC_ret_tck" class="F1 R5 M20">

	<div id="SLD1">

	<div class="sl-slider">

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/E2/E2_1r.jpg">
				<img src="css/ret/E2/E2_1.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/E2/E2_2r.jpg">
				<img src="css/ret/E2/E2_2.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/E2/E2_3r.jpg">
				<img src="css/ret/E2/E2_3.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/E2/E2_4r.jpg">
				<img src="css/ret/E2/E2_4.jpg">		
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

			<h1>Modification ENVIRONNEMENTALE</h1>
			<h2>Personnalisation légère</h2>
			<p>Un petit élément vient entacher une de vos photos, une grue au loin qui n'aurait pas du être là, un panneau mal placé ? Notre option de retouche légère vous permettra d'effacer de petits éléments disgracieux.</p>
			<ul class="CLR">
				<li><a class="BT2 BLUE2 R4" href="index.php?page=retouch_step1">RETOUCHER MAINTENANT</a></li>
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
					<div>3.<span>49€</span></div>
					<p>Prix<span>Retouche</span></p>
				</li>
			</ul>

			<h3>Choisir une Options de retouche :</h3>
			<ul>
				<li><a href="index.php?page=retouch_E1" class="FHb">Retouche du Ciel</a></li>
				<li><a href="index.php?page=retouch_E2" class="FHb">Personnalisation légère</a></li>
				<li><a href="index.php?page=retouch_E3" class="FHb">Personnalisation (Niveau 1)</a></li>
				<li><a href="index.php?page=retouch_E4" class="FHb">Personnalisation (Niveau 2)</a></li>
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