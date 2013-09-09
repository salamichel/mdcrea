<?php

include 'classes/class.MDPack.php';
include ("config/settings.php");
require_once('classes/MysqliDb.php');
require_once("scripts/functions.php");

//connexion base de données
$db = new Mysqlidb($bdd_host, $bdd_user, $bdd_pwd, $bdd_name);


$pack = new MDPack($db);

$pack->setPackId(2);
$pack->setPackName();
$pack->setPackOptions();
$pack->setPackProduits();
    

echo $pack->id;

echo $pack->getPackName();

foreach ($pack->options as $option){
    print_r($option);
}

foreach ($pack->produits as $produit){
    print_r($produit);
}

?>
