<?php
include ("template/hd/acc/H_acc.php");
?>

<!-- ACC -->

<section id="SC_acc_nv" class="FD R4 M20">

	<div class="T_BK1 R4t">
		<h3>Espace Personnel<span>Mes Commandes</span></h3>
	</div>

<?php
include ("template/ot/NAV_acc.php");
?>

<!-- CM1 -->

<section id="SC_acc_cad" class="F1 R4 M20">

	<div class="SH">
		<h3 class="BK0 R4t">CONTENU DE MON PANIER</h3>	
	</div>

	<div class="T_STP LSt CLR">
	
		<article>

			<div class="F1 R4">

				<div class="SH">
					<h3 class="BK0 R4t">Commande</h3>	
				</div>

				<div>
					<h1>Vérification Commande</h1>
					<p>Veuillez vérifier que votre commande est bien identique à votre demande.</p>
				</div>

			</div>

		</article>

		<article>

			<div class="F1 R4">
		
				<div class="SH">
					<h3 class="BK0 R4t">Paiement</h3>	
				</div>

				<div>
					<h1>Paiement Différé</h1>
					<p>Vous ne payez que lorsque votre commande est terminée. Nous vous mettrons en liaison directement avec MDcreatis pour le paiement.</p>
				</div>

			</div>

		</article>

		<article>

			<div class="F1 R4">
		
				<div class="SH">
					<h3 class="BK0 R4t">Valider</h3>	
				</div>

				<div>
					<h1>Validation</h1>
					<p>Appuyez sur le bouton pour passer votre commande.</p>
					<form action="#" method="post">
					<form>
						<a href="index.php?page=retouch_sp4" class="BT1 BLUE1 R20">Envoyer ma Commande</a>
					</form>
				</div>

			</div>

		</article>

	</div>
	<!-- COMMAND -->

	<div class="T_CMD1">

			<article>
				<div>Référence</div>
				<div>Prestation</div>
				<div>Date</div>
				<div>Statut</div>
				<div>Points</div>
				<div>Prix TTC</div>
				<div></div>
			</article>

			<a href="#">
				<div>MF-F23091985</div>
				<div>Retouche</div>
				<div>20-01-2012</div>
				<div>En Attente</div>
				<div>23 MD</div>
				<div>3.49€</div>
				<div>voir</div>
			</a>
			<a href="#">
				<div>MF-F23091985</div>
				<div>Design</div>
				<div>18-01-2012</div>
				<div>En Cours</div>
				<div>23 MD</div>
				<div>149.99€</div>
				<div>voir</div>
			</a>
			<a href="#">
				<div>MF-F23091985</div>
				<div>Retouche</div>
				<div>18-01-2012</div>
				<div>En Cours</div>
				<div>23 MD</div>
				<div>1.99€</div>
				<div>voir</div>
			</a>

	</div>

</section>

<?php
include ("template/ft/F_wht.php");
?>