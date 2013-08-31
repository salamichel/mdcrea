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
			<div id="second_step" class="CLR">

				<h2>Informations pour traiter votre commande.</h2>
				<div class="form CLR">

					<div class="CLR">
						<label for="time">Durée de la séance :</label>
						<select id="time" name="time">
							<option>30 min</option>
							<option>1 h</option>
							<option>1 heure 30</option>
							<option>2 heures</option>
							<option>2 heures 30 minutes</option>
							<option>3 heures</option>
						</select>
					</div>

					<div class="CLR">
						<label for="picture">Nombre de Photos :</label>
						<input type="number" name="picture" id="picture" value="Prénom" />
					</div>

					<div class="CLR">
                    	<label for="retouch">Nombre de Retouches :</label>
                    	<input type="number" name="retouch" id="retouch" value="Prénom" />
					</div>

				</div>

				<button id="submit_second" type="submit" class="BT2 BLUE1 R5" name="submit_second">Suivant</button>

			</div>

			<!-- #third_step -->
			<div id="third_step">

				<h2>Informations pour traiter votre commande.</h2>
				<div class="form CLR">

					<div class="CLR">
						<label for="namecity">Lieu de la séance :</label>
						<input type="text" name="namecity" id="namecity" value="Ville" />
					</div>

					<div class="CLR">
						<label for="location">Endroit de la séance :</label>
						<select id="location" name="location">
							<option>Studio</option>
							<option>Extérieur</option>
							<option>Domicile</option>
						</select>
					</div>

					<div class="CLR">
						<label for="namelocation">Nom de l'endroit :</label>
						<input type="text" name="namelocation" id="namelocation" value="Nom" />
					</div>

					<div class="CLR">
						<textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
					</div>

				</div>

				<button id="submit_first" type="submit" class="BT2 BLUE1 R5" name="submit_first">Suivant</button>

			</div>
			
			<!-- #fourth_step -->
			<div id="fourth_step">

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
include ("template/ft/F_blk.php");
?>