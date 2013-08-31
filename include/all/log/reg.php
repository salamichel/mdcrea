<?php
include ("template/hd/log/H_reg.php");
?>

<!-- REGISTRER -->

<section class="SH">
<div id="SC_reg" class="BK0 R4 M20 CLR">

	<article class="SHl">

		<h2>Créer un compte MDcreatis</h2>
		<p>Un e-mail vous sera envoyé pour confirmer votre inscription.</p>

	</article>

	<article class="SHr">

		<h2>Veuillez saisir les informations suivantes.</h2>
		<form action="#" method="post">
	
			<div class="CLR">
				<input type="text"	name="fname" id="fname" placeholder="Prénom" required="required">
				<input type="text"	name="name" id="name" placeholder="Nom" required="required">
			</div>
			<div>
				<input type="email"	name="regID" id="regID" placeholder="Adresse Email" required="required">
				<input type="password"	name="regPW" id="regPW" placeholder="Mot de passe" required="required">
			</div>
			<div>
				<input type="checkbox" value="yes" name="regTM" id="regTM">
				<span>
					J'accepte les <a target="_blank" href="index.php?page=conditions">Conditions générales</a> 						MDcreatis.com
				</span>
			</div>
			<div>
				<button type="submit" class="BT2 BLUE2 R4" name="valid" title="Valider">S'inscrire</button>
			</div>

		</form>

	</article>
	
</div>
</section>

<?php
include ("template/ft/F_wht.php");
?>