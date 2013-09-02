<?php
include ("template/hd/nav/H2_ret.php");
?>

<!-- STP -->

<section id="SC_ret_sp" class="F1 R4 M20">

    <div class="T_BK1 R4t">
        <h2>Etape n°1<span>Sélection de vos photos.</span></h2>
        <p>Cette étape vous permet de sélectionner vos photos nécessitant une retouche. Une ou plusieurs images peuvent être envoyées.</p>
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
                    <form action="#" method="post">
                        <form>
                            <a href="index.php?page=retouch_sp2" class="BT1 BLUE1 R20">Etape suivante</a>
                        </form>
                </div>

            </div>

        </article>

    </div>

</section>

<!-- AC1 -->

<section id="SC_ret_ac1" class="F1 R4 M100">

    <div class="T_STP">
        <h1>Glissez vos photos ici</h1>
        <p>ou</p>
        <fieldset>
            <legend>HTML5 File Drag &amp; Drop API</legend>
            <p>Drag and drop one file to upload, and press "upload" </p>
            <form name="form5" enctype="multipart/form-data" method="post" action="upload.php" />
            <p><input type="file" size="32" name="my_field" value="" id="dnd_field" /></p>
            <div id="dnd_drag">... drag and drop here ...</div>
            <div id="dnd_status"></div>
            <p class="button"><input type="hidden" name="action" value="xhr" />
                <input type="submit" name="Submit" value="upload" id="dnd_upload"/></p>
            </form>
            <div id="dnd_result"></div>
        </fieldset>

        <fieldset>
            <legend>Multiple upload</legend>
            <p>Pick up some files to upload, and press "upload" </p>
            <form name="form3" enctype="multipart/form-data" method="post" action="upload.php">
                <p><input type="file" size="32" name="my_field[]" value="" /></p>
                <p><input type="file" size="32" name="my_field[]" value="" /></p>
                <p><input type="file" size="32" name="my_field[]" value="" /></p>
                <p class="button"><input type="hidden" name="action" value="multiple" />
                    <input type="submit" name="Submit" value="upload" /></p>
            </form>
        </fieldset>

    </div>

</section>

<?php
include ("template/ft/F_blk.php");
?>