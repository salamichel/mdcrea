<?php
include ("template/hd/log/H_reg.php");

$updateData = array(
    'is_actif' => '1',
    'date_activation' => date("Y-m-d h:i:s")
);


$db->where('cle_securite', $_GET["key"]);
$results = $db->update('md_comptes', $updateData);

$user = $db
        ->where('cle_securite', $_GET["key"])
        ->get('md_comptes');

if (count($user) == 1) {
    $_SESSION["user"] = $user[0];
    //echo "OK";
    ?>
    <!-- REGISTRER -->

    <section class="SH">
        <div id="SC_reg" class="BK0 R4 M20 CLR">

            <article class="SHl">

                <h2>Compte activé</h2>
                <p><?= strtoupper($user[0]["name"]) ?> <?= ucfirst($user[0]["fname"]) ?>, MDcreatis vous souhaite la bienvenue dans le monde du Design et de la Photographie.</p>

            </article>

            <article class="SHr">

                <h2>Félicitations, votre compte est dorénavant actif.</h2>
                <p>Nous avons pris le soin de créer votre compte MDcreatis et de l'activer. Il vous permettra de nous contacter et d'effectuer des commandes en toute sécurité.</p>

            </article>

        </div>
    </section>

    <?
} else {
    echo "KO";
}
?>

<?php
include ("template/ft/F_wht.php");
?>