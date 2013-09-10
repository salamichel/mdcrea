<?php
include ("template/hd/nav/H2_mov.php");
?>

<!-- PLC1 -->

<section id="SC_mov_dv">

    <div class="T_BK1l">
        <h2>Montage Vidéo<span>Personnalisez votre Pack.</span></h2>
        <p>Vous avez une demande particulière à nous faire, vous aimeriez personnaliser votre pack pour un souvenir indélébile et qui colle à votre projet. Faites nous part de vos idées dès maintenant sur mdcreatis.com.</p>
    </div>

    <div class="SH">
        <h3 class="BK0 R4">FORMULAIRE DE DEMANDE DE PACK MONTAGE PERSONNALISÉ</h3>	
    </div>

    <div>

        <form action="index.php?page=send_devis" method="post">
            <input type="hidden" name="prestation" value ="movie">

            <h2>Demande effectuée par [Nom Membre]</h2>


            <!-- #first_step -->
            <div id="first_step">

                <h3>Veuillez compléter le contenu de votre Pack</h3>
                <div class="form CLR">

                    <div class="CLR">
                        <label for="time">Durée de la Séance :</label>
                        <select id="time" name="duree_seance">
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
                        <label for="time">Durée du film :</label>
                        <select id="time" name="duree_film">
                            <option>1 min</option>
                            <option>2 min</option>
                            <option>3 min</option>
                            <option>4 min</option>
                            <option>5 min</option>
                            <option>6 / 8 min</option>
                            <option>8 / 10 min</option>
                            <option>+10 min</option>
                        </select>
                    </div>

                    <div class="CLR">
                        <label for="picture">Nombre de Musiques :</label>
                        <input type="number" name="nb_musiques" id="picture" value="" />
                    </div>

                    <div class="CLR">
                        <label for="retouch">Nombre de Phrases :</label>
                        <input type="number" name="nb_phrases" id="retouch" value="" />
                    </div>

                </div>                

            </div>

            <!-- #second_step -->
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
                        <select id="location" name="place">
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
                        <textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
                    </div>
                </div>
            </div>

            <!-- #third_step -->
            <div id="third_step">

                <h3>Veuillez Sélectionner vos Options.</h3>
                <div class="form CLR">

                    <?                    
                    $options = $db->rawQuery("SELECT * FROM md_produit_options a, md_options o WHERE a.option_id = o.option_id and produit_id = ? ", array("1"));                    
                    
                    foreach ($options as $option) {
                        ?>
                        <div class = "CLR">
                            <input type = "checkbox" name = "options[]" id = "namecity" value = "<?= $option["option_id"] ?>" />
                            <label for = "namecity"><?= $option["titre"] ?><span> <?= $option["prix_ht"] ?> €</span></label>
                        </div>
                        <?
                    }
                    ?>

                </div>


            </div>

            <!-- #fourth_step -->
            <div id="fourth_step">



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