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

            <!-- #first_step -->
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

            <!-- #second_step -->
            <?
            include ("template/forms/step2.php");
            ?>

            <!-- #third_step -->
            <?
            include ("template/forms/step3.php");
            ?>


            <!-- #fourth_step -->
            <?
            include ("template/forms/step4.php");
            ?>


        </form>

        <div id="progress_text"></div>

    </div>

</section>

</div>

<?php
include ("template/ft/F_blk.php");
?>