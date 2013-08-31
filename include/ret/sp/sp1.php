<?php
include ("template/hd/nav/H2_ret.php");
?>

<!-- STP -->

<section id="SC_ret_sp" class="F1 R4 M20">

	<div class="T_BK1 R4t">
		<h2>Etape n°1<span>Sélection de vos photos.</span></h2>
		<p>Cette étape vous permet de sélectionner vos photos nécessitant une retouche. Une ou plusieurs images peuvent être envoyées.</p>
	</div>

	<div class="T_STP LSt CLR">
	
		<article>

			<div class="F1 R4">

				<div class="SH">
					<h3 class="BK0 R4t">Phase n°1</h3>	
				</div>

				<div>
					<h1>Sélection Photos (Méthode 1)</h1>
					<p>Veuillez glisser / déposer les photos que vous souhaitez retoucher dans le cadre.</p>
				</div>

			</div>

		</article>

		<article>

			<div class="F1 R4">
		
				<div class="SH">
					<h3 class="BK0 R4t">Phase n°2</h3>	
				</div>

				<div>
					<h1>Sélection Photos (Méthode 2)</h1>
					<p>Cliquez sur le bouton "Téléchargez-les" afin de sélectionner vos photos.</p>
				</div>

			</div>

		</article>

		<article>

			<div class="F1 R4">
		
				<div class="SH">
					<h3 class="BK0 R4t">Phase n°3</h3>	
				</div>

				<div>
					<h1>Validation</h1>
					<p>Appuyez sur le bouton pour passer à l'étape suivante.</p>
					<form action="#" method="post">
					<form>
						<a href="index.php?page=retouch_sp2" class="BT1 BLUE1 R20">Etape suivante</a>
					</form>
				</div>

			</div>

		</article>

	</div>

</section>

<!-- AC1 -->

<section id="SC_ret_ac1" class="F1 R4 M100">

	<div class="T_STP">
		<h1>Glissez vos photos ici</h1>
		<p>ou</p>
		<form action="#" method="post">
			<button class="BT2 BLUE1 R4">Téléchargez-les</button>
		</form>
	</div>

</section>

<?php
include ("template/ft/F_blk.php");
?>