<?php
include ("template/hd/nav/H_des.php");
?>

<!-- PLC1 -->

<section id="SC_des_dv" class="F1 R4 M20">

	<div class="T_BK1 LSb">
		<h3>Communication Visuelle<span>Demandez votre devis.</span></h3>
		<p>Et si vous aviez envie d'approfondir sérieusement vos connaissances ?<br>C'est possible sur mdcreatis ! Personnalisez vos leçons, il vous suffit simplement de nous faire part de votre demande sur le site et nous vous apporterons une réponse personnalisée en vous formant chez vous ou sur internet.</p>
	</div>

	<div class="SH">
		<h3 class="BK0">FORMULAIRE DE DEMANDE EN SUPPORT DE COMMUNICATION</h3>	
	</div>

	<div>

		<form action="#" method="post">

			<!-- #first_step -->
			<div id="first_step">

				<h2>Informations personnelles</h2>
				<div class="form CLR">
					<input type="text" name="firstname" id="firstname" value="Prénom" />
					<input type="text" name="lastname" id="lastname" value="Nom" />
					<input type="text" name="email" id="email" value="Adresse Email" />
					<input type="text" name="phone" id="phone" value="Téléphone" />
				</div>

				<button id="submit_first" type="submit" class="BT2 BLUE1 R5" name="submit_first">Suivant</button>

			</div>

			<!-- #second_step -->
			<div id="second_step">

				<h2>Informations pour traiter votre commande.</h2>
				<div class="form CLR">

					<div class="CLR">
						<label for="namecity">Lieu de la demande :</label>
						<input type="text" name="namecity" id="namecity" value="Ville" />
					</div>

					<div class="CLR">
						<label for="type">Type de prestation :</label>
						<select id="type" name="type">
							<option>Logotype</option>
							<option>Carte de visite</option>
							<option>Affiche</option>
							<option>Affiche</option>
							<option>Flyer</option>
							<option>Plaquette</option>
							<option>Carton d'invitation</option>
							<option>Web-Design</option>
						</select>
					</div>

					<div class="CLR">
						<label for="type">Budget :</label>
						<select id="type" name="type">
							<option>- 100€</option>
							<option>100€ - 200€</option>
							<option>200€ - 400€</option>
							<option>400€ - 800€</option>
							<option>+ 800€</option>
						</select>
					</div>

					<div class="CLR">
						<textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
					</div>

				</div>

				<button id="submit_first" type="submit" class="BT2 BLUE1 R5" name="submit_first">Suivant</button>

			</div>

		<!-- #third_step -->
		<div id="third_step">

			<div class="form CLR">
				<table>
					<tr><td>Username</td><td></td></tr>
					<tr><td>Password</td><td></td></tr>
					<tr><td>Email</td><td></td></tr>
					<tr><td>Name</td><td></td></tr>
					<tr><td>Age</td><td></td></tr>
					<tr><td>Gender</td><td></td></tr>
					<tr><td>Country</td><td></td></tr>
				</table>
			</div>

			<input class="send submit" type="submit" name="submit_fourth" id="submit_fourth" value="SEND" />            

		</div>

	</form>

	<div id="progress_text"></div>

	</div>

</section>

</div>

<?php
include ("template/ft/F_wht.php");
?>