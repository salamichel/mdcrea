<?php
include ("template/hd/nav/H2_ret.php");
$md_page = new mdcreatis($db);
$md_page->setPagePath("include/ret/pk/pk3.php");
$pack1 = $md_page->getSubPage("beauty_box");
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
				<img src="css/ret/P3/P3_1r.jpg">
				<img src="css/ret/P3/P3_1.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/P3/P3_2r.jpg">
				<img src="css/ret/P3/P3_2.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/P3/P3_3r.jpg">
				<img src="css/ret/P3/P3_3.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/P3/P3_4r.jpg">
				<img src="css/ret/P3/P3_4.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/P3/P3_5r.jpg">
				<img src="css/ret/P3/P3_5.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/P3/P3_6r.jpg">
				<img src="css/ret/P3/P3_6.jpg">		
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


			<h1>Beauty BOX</h1>
			<h2>Un portrait, sur lequel vous mettre en valeur ? Tel est l'objectif du Beauty Box qui se contente d?allier les meilleures techniques pour valoriser vos images. Réunir le minimum pour vous apporter le maximum.</h2>
			<p>Il comprend l'intégralité des techniques de retouche pour la mise en valeur d'un visage lors d'une photo de portrait.</p>

			</div>

			<div class="HR"></div>

			<div>
				<h1>Le pack au prix total de :</h1>
				<p>€ 8,99 TTC <span>au lieu de </span><span>18,43 €</span></p>
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
					<div>9.<span>44€</span></div>
					<p>Economies<span>Réalisées</span></p>
				</li>
			</ul>

		<ul>
			<h3>Options de ce pack :</h3>
			<li><a href="index.php?page=retouch_A1" class="FHb">
				<h2>Ouverture DIAPHRAGME<span>Portrait</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_B1" class="FHb">
				<h2>Correction COLORIMÉTRIE<span>Chromatique</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_C1" class="FHb">
				<h2>Réglage LUMINOSITE</h2>
			</a></li>
			<li><a href="index.php?page=retouch_D3" class="FHb">
				<h2>Gommage IMPERFECTIONS<span>Suppression Acné</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_D4" class="FHb">
				<h2>Gommage IMPERFECTIONS<span>Lissage de Peau</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_D1" class="FHb">
				<h2>Gommage IMPERFECTIONS<span>Yeux rouges</span></h2>
			</a></li>
			<li><a href="index.php?page=retouch_D5" class="FHb">
				<h2>Gommage IMPERFECTIONS<span>Blanchiment des Dents</span></h2>
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