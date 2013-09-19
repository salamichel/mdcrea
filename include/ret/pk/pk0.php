<?php
include ("template/hd/nav/H2_ret.php");
?>

<!-- STP -->

<section id="SC_ret_sp" class="F1 R4 M20">

    <div class="T_BK1 R4t">
        <h2>Pack Retouche<span>Sélection de votre photo.</span></h2>
        <p>Sélectionnez la photo qui bénéficiera des retouches choisies dans votre Pack.</p>
    </div>

    <div class="T_STP LSt CLR">
        <article>
            <div class="F1 R4">
                <div class="SH">
                    <h3 class="BK0 R4t">Phase n°1</h3>	
                </div>
                <div>
                    <h1>Sélection Photos (Méthode 1)</h1>
                    <p>Veuillez glisser / déposer les photos que vous souhaitez retoucher dans le cadre.</p>
                </div>
            </div>
        </article>
        <article>
            <div class="F1 R4">
                <div class="SH">
                    <h3 class="BK0 R4t">Phase n°2</h3>	
                </div>
                <div>
                    <h1>Sélection Photos (Méthode 2)</h1>
                    <p>Cliquez sur le bouton "Téléchargez-les" afin de sélectionner vos photos.</p>
                </div>
            </div>
        </article>
        <article>
            <div class="F1 R4">
                <div class="SH">
                    <h3 class="BK0 R4t">Phase n°3</h3>	
                </div>
                <div>
                    <h1>Validation</h1>
                    <p>Appuyez sur le bouton pour passer à l'étape suivante.</p>
                    <form id="frm1" action="index.php?page=cad" method="post">
                        <input type="hidden" name="item_id" value="<?= @$_POST["item_id"] ?>">
                        <a href="#" class="BT1 BLUE1 R20" onclick="document.getElementById('frm1').submit();">Ajouter au Panier</a>
                    </form>
                </div>

            </div>

        </article>

    </div>

</section>

<!-- AC1 -->
<?
include("template/forms/dnd_forms.php")
?>

<?php
include ("template/ft/F_blk.php");
?>