<?php
include ("template/hd/nav/H2_ret.php");


?>

<?
$tkts = $db->rawQuery("SELECT distinct nom
            FROM md_produits
            WHERE   prestation = ?
            order by nom", array("Technique Retouche"));
$mainlist = "\"";
$sublist = array();
foreach ($tkts as $tkt) {
    $mainlist .= $tkt["nom"] . "\",\"";
    $sublist[$tkt["nom"]] = getTktOption($tkt["nom"]);
}

function getTktOption($tkt) {
    global $db;
    $opts = $db->rawQuery("SELECT a.produit_id, c.option_id, titre, c.prix_ht 
            FROM md_produits a, md_produit_options b, md_options c
            WHERE a.produit_id = b.produit_id
            and b.option_id = c.option_id 
            and nom = ? 
            order by c.prix_ht desc", array($tkt));
    return($opts);
}
?>

<!-- STP -->

<section id="SC_ret_sp" class="F1 R4 M20">

    <div class="T_BK1 R4t">
        <h2>Etape n°2<span>Techniques et options de retouche.</span></h2>
        <p>Sélectionnez dans cette étape les techniques et options de retouches que vous souhaitez appliquer à vos photos.</p>
    </div>

    <div class="T_STP LSt CLR">
        <article>
            <div class="F1 R4">
                <div class="SH">
                    <h3 class="BK0 R4t">Phase n°1</h3>	
                </div>
                <div>
                    <h1>Sélection Techniques</h1>
                    <p>Sélectionnez une ou plusieurs techniques de retouche pour chacune de vos photos.</p>
                </div>
            </div>
        </article>
        <article>
            <div class="F1 R4">
                <div class="SH">
                    <h3 class="BK0 R4t">Phase n°2</h3>	
                </div>
                <div>
                    <h1>Sélection des Options</h1>
                    <p>Sélectionnez une ou plusieurs options pour chacune des techniques de retouche.</p>
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

                    <a href="#" class="BT1 BLUE1 R20" onclick="document.getElementById('frm1').submit();">Etape suivante</a>

                </div>
            </div>
        </article>
    </div>
</section>

<!-- AC2 -->
<form id="frm1" action="index.php?page=cad" method="post">    
    <section id="SC_ret_ac2" class="F1 R4 M100">
        <?
        $i = 0;
        foreach ($_SESSION["pics"] as $pic) {
            ?>
            <article class="CLR">
                <div>
                    <img src="<?= $dir_dest ?>/<?= $pic["filename"] ?>">
                </div>            

                <select id="tkt<?= $i ?>" name="cat[<?= $i ?>]">
                    <option value="">Sélectionner une technique</option>
                    <?
                    foreach (array_keys($sublist) as $key) {
                        ?>
                        <option value="<?= $key ?>"><?= $key ?></option>    
                        <?
                    }
                    ?>        
                </select>

                <select id="opt<?= $i ?>" name="opt[<?= $i ?>]">
                    <option value="">Sélectionner une option</option>
                    <?
                    foreach ($sublist as $key => $values) {
                        foreach ($values as $opt) {
                            ?>  
                            <option value="<?= $opt["option_id"] ?>" class="<?= $key ?>"><?= $opt["titre"] ?> (<?= $opt["prix_ht"] ?> €)</option>
                            <?
                        }
                    }
                    ?>                 
                </select>


            </article>

            <script>
                            $("#opt<?= $i ?>").chained("#tkt<?= $i ?>"); /* or $("#series").chainedTo("#mark"); */
            </script>

            <?
            $i++;
        }
        ?>







    </section>
</form>
<?php
include ("template/ft/F_blk.php");
?>