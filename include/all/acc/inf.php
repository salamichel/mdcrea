<?php
include ("template/hd/acc/H_acc.php");
?>

<!-- ACC -->

<section id="SC_acc_nv" class="FD R4 M20">

	<div class="T_BK1 R4t">
		<h3>Espace Personnel<span>Mes Informations</span></h3>
	</div>

<?php
include ("template/ot/NAV_acc.php");
?>

<!-- INF -->

<div class="SH M20">
	<h3 class="BK0 R4t">MES INFORMATIONS PERSONNELLES</h3>	
</div>

<section class="SH">
<div id="SC_reg" class="BK0 R4b CLR">

	<article class="SHl">

		<h2>Modifier vos informations MDcreatis</h2>
		<p>Appuyez sur le bouton valider pour confirmer les changements effectués.</p>

	</article>

	<article class="SHr">

		<h2>Veuillez saisir vos informations correctes.</h2>
		<form action="#" method="post">

			<div class="CLR">
				<label><input type="radio" name="regCV" id="regMR">Monsieur</label>
				<label><input type="radio" name="regCV" id="regMME">Madame</label>
				<label><input type="radio" name="regCV" id="regMLLE">Mademoiselle</label>
			</div>

			<div>
				<input type="text" name="fname" id="fname" placeholder="Prénom" required="required">
				<input type="text" name="name" id="name" placeholder="Nom" required="required">
			</div>
			<div>
				<input type="email"	name="regID" id="regID" placeholder="Adresse Email" required="required">
				<input type="password" name="regPW" id="regPW" placeholder="Mot de passe" required="required">
				<input type="password" name="regCPW" id="regCPW" placeholder="Confirmation du mot de passe" 					required="required">
			</div>
			<div class="CLR">
				<input type="text" name="regCITY" id="regCITY" placeholder="Ville">
				<input type="text" name="regCP" id="regCP" placeholder="Code Postal">
			</div>
			<div>
				<input type="checkbox" value="yes" name="regTM" id="regTM">
				<span>
					J'accepte les <a target="_blank" href="#">Conditions générales</a> MDcreatis.com
				</span>
			</div>
			<div>
				<button type="submit" class="BT2 BLUE2 R4" name="valid" title="Valider">Enregistrer</button>
			</div>

		</form>

	</article>
	
</div>
</section>

<?php
include ("template/ft/F_wht.php");
?>