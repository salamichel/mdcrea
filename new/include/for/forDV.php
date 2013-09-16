<?php
include ("template/hd/nav/H2_for.php");
?>

<!-- DV -->

<section id="SC_for_dv">

	<div class="T_BK1">
		<h3>Formation Personnalisée<span>Demandez-nous votre leçon.</span></h3>
		<p>Et si vous aviez envie d'approfondir sérieusement vos connaissances ?<br>C'est possible sur mdcreatis ! Personnalisez vos leçons, il vous suffit simplement de nous faire part de votre demande sur le site et nous vous apporterons une réponse personnalisée en vous formant chez vous ou sur internet.</p>
	</div>

	<div class="SH">
		<h3 class="BK0 R4">FORMULAIRE DE FORMATION PERSONNALISÉE</h3>	
	</div>

	<div>

		<form action="#" method="post">

			<h2>Demande effectuée par [Nom Membre]</h2>

			<!-- #first_step -->
			<div id="first_step">

				<h3>Veuillez compléter le contenu de votre Pack</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="time">Durée de la Formation :</label>
						<select id="time" name="time">
							<option>Nous laisser évaluer</option>
							<option>1 h</option>
							<option>1 heure 30</option>
							<option>2 heures</option>
							<option>2 heures 30</option>
							<option>3 heures</option>
							<option>3 heures 30</option>
							<option>4 heures</option>
							<option>4 heure 30</option>
							<option>5 heures</option>
							<option>5 heures 30</option>
							<option>6 heures</option>
							<option>6 heures 30</option>
							<option>8 heures</option>
							<option>10 heures</option>
							<option>+ 10 heures</option>
						</select>
					</div>

					<div class="CLR">
                    	<label for="retouch">Nombre de Jours :</label>
                    	<input type="number" name="retouch" id="retouch" value="Prénom" />
					</div>

					<div class="CLR">
						<label for="time">Nombre d'heures par Cours :</label>
						<select id="time" name="time">
							<option>1 h</option>
							<option>1 heure 30</option>
							<option>2 heures</option>
							<option>2 heures 30</option>
							<option>3 heures</option>
							<option>3 heures 30</option>
							<option>4 heures</option>
						</select>
					</div>

				</div>

				<button id="submit_first" type="submit" class="BT2 BLUE1 R5" name="submit_first">Suivant</button>

			</div>

			<!-- #second_step -->
			<div id="second_step" class="CLR">

				<h3>Veuillez indiquer le Lieu de la Formation.</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="location">Type de demande :</label>
						<select id="location" name="location">
							<option>Particulier</option>
							<option>Entreprise</option>
						</select>
					</div>

					<div class="CLR">
						<label for="location">Endroit de la formation :</label>
						<select id="location" name="location">
							<option>à Domicile</option>
							<option>Autre</option>
						</select>
					</div>

					<div class="CLR">
						<label for="namecity">Lieu de la formation :</label>
						<input type="text" name="namecity" id="namecity" placeholder="Nom de la ville" />
					</div>

					<div class="CLR">
						<label for="namelocation">Nom de l'endroit :</label>
						<input type="text" name="namelocation" id="namelocation" placeholder="Nom du lieu" />
					</div>

					<div class="CLR">
						<label for="date">Date Souhaitée :</label>
						<input type="date" name="date" id="date" />
					</div>

					<div class="CLR">
						<textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
					</div>

				</div>

				<button id="submit_second" type="submit" class="BT2 BLUE1 R5" name="submit_second">Suivant</button>

			</div>

			<!-- #third_step -->
			<div id="third_step">

				<h3>Veuillez Sélectionner vos Leçons ou faire votre demande.</h3>
				<div class="form CLR">

					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Présentation de l'interface</label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Sélection et détourage</label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Détourage avancé</label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Correction d'une image</label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Correction des couleur</label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Modélisation</label>
					</div>
					<div class="CLR">
						<textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
					</div>

				</div>

				<button id="submit_third" type="submit" class="BT2 BLUE1 R5" name="submit_third">Suivant</button>

			</div>

			<!-- #fourth_step -->
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