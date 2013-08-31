<?php
include ("template/hd/nav/H2_ret.php");
?>

<!-- TCK -->

<section id="SC_ret_tck" class="F1 R5 M20">

	<div id="SLD1">

	<div class="sl-slider">

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/B2/B2_1r.jpg">
				<img src="css/ret/B2/B2_1.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/B2/B2_2r.jpg">
				<img src="css/ret/B2/B2_2.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/B2/B2_3r.jpg">
				<img src="css/ret/B2/B2_3.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/B2/B2_4r.jpg">
				<img src="css/ret/B2/B2_4.jpg">		
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

			<h1>Correction COLORIMÉTRIE</h1>
			<h2>Dé Saturation</h2>
			<p>La dé saturation permet de passer la photographie en noir et blanc en lui enlevant toutes ses composantes de couleur. Elle apporte un charme d'antan à la prise de vue et une interprétation différente du sujet photographié.</p>
			<ul class="CLR">
				<li><a class="BT2 BLUE2 R5" href="index.php?page=retouch_step1">RETOUCHER MAINTENANT</a></li>
				<li><a class="BT2 GREY R5" href="index.php?page=formation_devis">FORMATION VIDEO</a></li>
			</ul>

		</article>

		<aside>

			<ul>
				<li>
					<div>24<span>H</span></div>
					<p>Réception<span>Retouche</span></p>
				</li>
				<li>
					<div>0.<span>99€</span></div>
					<p>Prix<span>Retouche</span></p>
				</li>
			</ul>

			<h3>Choisir une Options de retouche :</h3>
			<ul>
				<li><a href="index.php?page=retouch_B1" class="FHb">Chromatique</a></li>
				<li><a href="index.php?page=retouch_B2" class="FHb">Dé Saturation</a></li>
				<li><a href="index.php?page=retouch_B3" class="FHb">Dé Saturation Contrasté</a></li>
				<li><a href="index.php?page=retouch_B4" class="FHb">Dé Saturation Partielle</a></li>
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