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
                    <li><a href="#ID_idx_sv">Services</a></li>
                    <? if (empty($_SESSION["user"]["is_actif"])) { ?>
                        <li><a href="#ID_idx_rg">Inscription / Connexion</a></li>
                    <? } else { ?>
                        <?= ucfirst($_SESSION["user"]["name"]) ?>
                        <li><a href="index.php?page=logout">déconnexion</a></li>
                    <? } ?>
                    <?php include ("template/hd/nav/H3.php"); ?>
                </ul>

            </nav>

        </header>

        <!-- CONTENT -->

        <div>

