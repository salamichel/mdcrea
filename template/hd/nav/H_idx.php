<!-- BODY MAIN -->

<body id="body_idx">
    <div id="body_div" class="R4b">

        <!-- HEADER -->

        <header id="header">

            <!-- MENU -->

            <nav>

                <?php
                include ("template/menu.php");
                ?>

            </nav>

            <nav id="tit_idx" class="tit_A">

                <h1>mdcreatis<span>.com</span></h1>
                <ul>
                    <li><a href="#SC_idx_nw">Actualité</a></li>
                    <li><a href="#ID_idx_sv">Nos services</a></li>

                    <? if (empty($_SESSION["user"]["is_actif"])) { ?>
                        <li><a href="#ID_idx_rg">Connexion</a></li>
                    <? } else { ?>
                        <?= ucfirst($_SESSION["user"]["name"]) ?>
                        <li><a href="index.php?page=logout">déconnexion</a></li>
                    <? } ?>

                    <li><a href="#ID_idx_rg">Rejoindre MDcreatis</a></li>
                </ul>

            </nav>

        </header>

        <!-- CONTENT -->

        <div>

