<!-- REGISTRER -->

<section class="SH">
    <div id="SC_reg" class="BK0 R4 M20 CLR">

        <article class="SHl">

            <h2>Créer un compte MDcreatis</h2>
            <p>Un e-mail vous sera envoyé pour confirmer votre inscription.</p>

        </article>

        <article class="SHr">

            <h2>Veuillez saisir les informations suivantes.</h2>

            <?
            if (!$formCorrect) {
                ?>
                <div> <?= $msg ?></div> 
                <?
            }
            ?>

            <form action="index.php?page=registrer" method="post">
                <input type="hidden" name="src" value="register">
                <div class="CLR">
                    <input type="text"	name="fname" id="fname" placeholder="Prénom" required="required">
                    <input type="text"	name="name" id="name" placeholder="Nom" required="required">
                </div>
                <div>
                    <input type="email"	name="cnx_id" id="regID" placeholder="Adresse Email" required="required" value="<?= @$_POST["cnx_id"] ?>">
                    <input type="password" name="cnx_pass" id="regPW" placeholder="Mot de passe" required="required" value="<?= @$_POST["cnx_pass"] ?>">
                </div>
                <div>
                    <input type="checkbox" value="yes" name="regTM" id="regTM"  required="required">
                    <span>
                        J'accepte les <a target="_blank" href="index.php?page=conditions">Conditions générales</a> MDcreatis.com
                    </span>
                </div>
                <div>
                    <input  type="submit" class="BT2 BLUE2 R4" name="valid" value="S'inscrire" />
                </div>

            </form>

        </article>

    </div>
</section>