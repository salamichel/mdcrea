<?php

include 'classes/class.MDProduct.php';
include ("config/settings.php");
require_once('classes/MysqliDb.php');
require_once("scripts/functions.php");

//connexion base de données
$db = new Mysqlidb($bdd_host, $bdd_user, $bdd_pwd, $bdd_name);


$produit = new MDProduct($db);

$produit->setProductId(1);
$produit->setProductName();


echo $produit->id;
echo $produit->getProductName();


$produit->setProductTechniques();
$r = $produit->getProductInfo();

print_r($r);

foreach ($produit->techniques as $tkt) {
    print_r($tkt);
}
?>
