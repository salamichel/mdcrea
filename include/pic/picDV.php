<?php
include ("template/hd/nav/H2_pic.php");
?>

<!-- PIC_DEV -->

<section id="SC_pic_dv">

	<div class="T_BK1 LSb">
		<h3>Séance Photo Personnalisée<span>Demandez votre séance.</span></h3>
		<p>Et si vous aviez envie d'approfondir sérieusement vos connaissances ?<br>C'est possible sur mdcreatis ! Personnalisez vos leçons, il vous suffit simplement de nous faire part de votre demande sur le site et nous vous apporterons une réponse personnalisée en vous formant chez vous ou sur internet.</p>
	</div>

	<div class="SH">
		<h3 class="BK0 R4">FORMULAIRE DE SÉANCE PHOTO PERSONNALISÉE</h3>	
	</div>

	<div>

		<form action="#" method="post">

			<h2>Demande effectuée par [Nom Membre]</h2>

			<!-- FIRST -->
			<div id="first_step">

				<h3>Veuillez compléter le contenu de votre Pack</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="time">Durée du Shooting :</label>
						<select id="time" name="time">
							<option>30 min</option>
							<option>1 h</option>
							<option>1 heure 30</option>
							<option>2 heures</option>
							<option>2 heures 30</option>
							<option>3 heures</option>
							<option>3 heures 30</option>
							<option>4 heures</option>
						</select>
					</div>

					<div class="CLR">
						<label for="picture">Nombre de Photos :</label>
						<input type="number" name="picture" id="picture" value="Prénom" />
					</div>

					<div class="CLR">
                    	<label for="retouch">Nombre de Photos Filtres :</label>
                    	<input type="number" name="retouch" id="retouch" value="Prénom" />
					</div>

				</div>

				<button id="submit_first" type="submit" class="BT2 BLUE1 R5" name="submit_first">Suivant</button>

			</div>

			<!-- SECOND -->
			<div id="second_step" class="CLR">

				<h3>Veuillez indiquer le Lieu de la Séance.</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="location">Type de demande :</label>
						<select id="location" name="location">
							<option>Particulier</option>
							<option>Entreprise</option>
							<option>Evénement</option>
							<option>Reportage</option>
						</select>
					</div>

					<div class="CLR">
						<label for="location">Endroit de la séance :</label>
						<select id="location" name="location">
							<option>Studio</option>
							<option>Extérieur</option>
							<option>Intérieur</option>
							<option>Domicile</option>
							<option>Autre</option>
						</select>
					</div>

					<div class="CLR">
						<label for="namecity">Lieu de la séance :</label>
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

			<!-- THIRD -->
			<div id="third_step">

				<h3>Veuillez Sélectionner vos Options.</h3>
				<div class="form CLR">

					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">CD du Shooting</label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">CD du Shooting Complet<span>4.99 €</span></label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">CD Supplémentaire<span>4.99 €</span></label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Tirage photo 10 x 15<span>Le pack à 4.99 €</span></label>
					</div>
					<div class="CLR">
						<input type="checkbox" name="namecity" id="namecity" value="Ville" />
						<label for="namecity">Tirage photo 20 x 30<span>La photo à 4.99 €</span></label>
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
include ("template/ft/F_blk.php");
?>