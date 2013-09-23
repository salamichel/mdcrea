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

                    <a href="javascript:void(0);" class="BT1 BLUE1 R20" onclick="document.getElementById('frm1').submit();">Etape suivante</a>

                </div>
            </div>
        </article>
    </div>
</section>


<div id="template" style="visibility:hidden">
    <select id="tpltkt">
        <option value="">Sélectionner une technique</option>
        <?
        foreach (array_keys($sublist) as $key) {
            ?>
            <option value="<?= $key ?>"><?= $key ?></option>    
            <?
        }
        ?>        
    </select>

    <select id="tplopt">
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
</div>

<!-- AC2 -->
<form id="frm1" action="index.php?page=cad" method="post">    
    <section id="SC_ret_ac2" class="F1 R4 M100">
        <?
        $i = 0;
        foreach ($_SESSION["pics"] as $pic) {
            ?>
            <article class="CLR" id="test<?= $i ?>">
                <div id="img<?= $i ?>">
                    <img src="<?= $dir_dest ?>/<?= $pic["filename"] ?>">
                </div> 
                <div id="template<?= $i ?>">
                    <select id="tkt<?= $i ?>" name="cat[<?= $i ?>]" class="tkt">
                        <option value="">Sélectionner une technique</option>
                        <?
                        foreach (array_keys($sublist) as $key) {
                            ?>
                            <option value="<?= $key ?>"><?= $key ?></option>    
                            <?
                        }
                        ?>        
                    </select>

                    <select id="opt<?= $i ?>" name="opt[<?= $i ?>][]" class="opt">
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
                    <a href="javascript:void(0);" onclick="javascript:addnewline(<?= $i ?>)">clone</a>
                </div>
            </article>


            <script>
                        $("#opt<?= $i ?>").chained("#tkt<?= $i ?>"); /* or $("#series").chainedTo("#mark"); */
            </script>
            <?
            $i++;
        }
        ?>

    </section>

    <script>
        var c = 0;

        $(".cloneCF").click(function() {
            var cloned = $('#template').clone();

            // Set the id of cloned, use i++ instead of incrementing it elsewhere.
            $(cloned).attr('id', 'duptkt' + (++c));
            $(cloned).css("visibility", "visible");

            $(cloned).appendTo('#template0');

            $("#dupopt" + c).chained("#duptkt" + c);

            //$("#combo0").clone().appendTo("#test0");*/
        });

        function addnewline(i) {
            var cloned = $('#template').clone();

            // Set the id of cloned, use i++ instead of incrementing it elsewhere.
            $(cloned).attr('id', 'duptkt' + (++c));
            $(cloned).css("visibility", "visible");

            $(cloned).appendTo('#template' + i);

            $(cloned).find('#tpltkt').attr('id', 'tkt' + i + c);
            $(cloned).find('#tplopt').attr('id', 'opt' + i + c);
            $(cloned).find('#tkt' + i + c).attr('name', 'cat[' + i + '][]');
            $(cloned).find('#opt' + i + c).attr('name', 'opt[' + i + '][]');

            $("#opt" + i + c).chained("#tkt" + i + c);


        }
    </script>



    <script>
        var c = 0;
        $(document).ready(function() {


            $(".cloneCFbak").click(function() {

                chainItWithId();

                /*var cloned = $('#combo0').clone();
                 
                 // Add .dupe class to cloned
                 $(cloned).addClass('dupe');
                 
                 // Set the id of cloned, use i++ instead of incrementing it elsewhere.
                 $(cloned).attr('id', 'dupcombo' + (++c));
                 
                 
                 $(cloned).appendTo('#test0');
                 
                 chainItWithId($(cloned));
                 
                 //$("#combo0").clone().appendTo("#test0");
                 */
            });
        });
        function chainItWithId() {
            $("#opt" + c).chained("#tkt" + c);

            // Chain .provincia to .pais in the current clone
            $(cloned).find('.tkt').attr('id', 'duptkt' + c);
            $(cloned).find('.opt').attr('id', 'dupopt' + c);
            $(cloned).find('#dupopt' + c).chained($(cloned).find('#duptkt' + c));
            // Chain .ciudad to .provincia in the current clone
            //$(cloned).find('.tkt').chained($(cloned).find('.opt'));
        }

    </script>

</form>
<?php
include ("template/ft/F_blk.php");
?>