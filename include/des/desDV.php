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

			<h2>Demande effectuée par [Nom Membre]</h2>

			<!-- FIRST -->
			<div id="first_step">

				<h3>Veuillez compléter le contenu de votre demande</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="type">Type de prestation :</label>
						<select id="type" name="type">
							<option>Logotype</option>
							<option>Carte de visite</option>
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
							<option>30€ - 100€</option>
							<option>100€ - 200€</option>
							<option>200€ - 400€</option>
							<option>400€ - 800€</option>
							<option>800€ - 1500€</option>
							<option>1500€ - 5000€</option>
							<option>5000€ - 20000€</option>
							<option>+ 20000€</option>
						</select>
					</div>

					<div class="CLR">
						<textarea name="comshoot" placeholder="Description de votre demande de devis…" cols=55 rows=10></textarea>
					</div>

				</div>

				<button id="submit_first" type="submit" class="BT2 BLUE1 R5" name="submit_first">Suivant</button>

			</div>

			<!-- SECOND -->
			<div id="second_step" class="CLR">

				<h3>Veuillez compléter les informations suivantes.</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="location">Type de demande :</label>
						<select id="location" name="location">
							<option>Particulier</option>
							<option>Entreprise</option>
							<option>Micro Entreprise</option>
							<option>Association</option>
							<option>Autre</option>
						</select>
					</div>

					<div class="CLR">
						<label for="location">Type de Projet :</label>
						<select id="location" name="location">
							<option>Demande d'informations</option>
							<option>Demande pour établir un Budget</option>
							<option>Projet concret, réalisation à moyen terme</option>
							<option>Projet important, réalisation dans l'immédiat</option>
						</select>
					</div>

					<div class="CLR">
						<label for="namecity">Lieu de la demande :</label>
						<input type="text" name="namecity" id="namecity" placeholder="Nom de la ville" />
					</div>

					<div class="CLR">
						<label for="date">Échéances :</label>
						<input type="date" name="date" id="date" />
					</div>

				</div>

				<button id="submit_second" type="submit" class="BT2 BLUE1 R5" name="submit_second">Suivant</button>

			</div>

			<!-- THIRD -->
			<div id="third_step">

				<h3>Joindre un Cahier des Charges.</h3>
				<div class="form CLR">

					<div id="file_design" class="R4">
						<input name="project[file]" type="file" data-validate="true">
					</div>

				</div>

				<button id="submit_third" type="submit" class="BT2 BLUE1 R5" name="submit_third">Suivant</button>

			</div>

			<!-- FOURTH -->
			<div id="fourth_step">

				<h3>Votre demande personnalisée a bien été envoyée.</h3>


				<button id="submit_fourth" type="submit" class="BT2 BLUE1 R5" name="submit_fourth">Terminer</button>

			</div>

		</form>

	<div id="progress_text"></div>

	</div>

</section>

</div>

<?php
include ("template/ft/F_wht.php");
?>