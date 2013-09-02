<div id="ID_idx_rg">
    <h1>REJOIGNEZ MDCREATIS</h1>
    <p>Et profitez de nos divers services dans le Design et la photographie</p>
</div>

<!-- IDX REG -->

<section class="SH">
    <div id="SC_idx_rg" class="BK0 R4 CLR">

        <article class="SHl">
            <h2>ME CONNECTER</h2>    
            <form action="index.php" method="post">
                <input type="hidden" name="src" value="connection">
                <div>
                    <input type="email"	name="cnx_id" id="cnx_id" placeholder="Adresse Email" required="required">
                </div>
                <div>
                    <input type="password"	name="cnx_pass" id="cnx_pass" placeholder="Mot de passe" required="required">
                </div>
                <div>
                    <a href="index.php?page=lostpass">Mot de passe oublié ?</a>
                </div>
                <div>
                    <button type="submit" class="BT2 BLACK R5" name="valid" title="Valider">Se connecter</button>
                </div>
            </form>
        </article>

        <article class="SHr">

            <h2>DEVENIR MEMBRE</h2>
            <p>Création graphique, communication, vidéos et retouches photos.<br>
                Des prestations pour particuliers et professionnels.</p>
            <form action="index.php?page=registrer" method="post">
                <div>
                    <label for="reg_id">Adresse email</label>
                    <input type="email"	name="cnx_id" id="cnx_id" placeholder="Adresse Email" required="required">
                </div>
                <div>
                    <label for="reg_pass">Mot de passe</label>
                    <input id="regPW" name="cnx_pass" type="password" placeholder="******" required="required">
                </div>
                <div>
                    <button type="submit" class="BT2 BLUE2 R4" name="valid" title="Valider">Valider</button>
                </div>

            </form>

        </article>

    </div>
</section>