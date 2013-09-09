<?php

include ("config/settings.php");
require_once('classes/MysqliDb.php');
require_once('classes/phpmailer.php');
require_once("scripts/functions.php");

//connexion base de données
$db = new Mysqlidb($bdd_host, $bdd_user, $bdd_pwd, $bdd_name);


include 'classes/class.mdorder.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
$order = new MDOrder($db);

$order->setUser(36);
$ref = $order->getReference();
echo $order->setReference($ref);
echo $order->addProduits(array("produit_id" => 1, "nb_item" => 1, "prix_ht" => "10"));
echo $order->addProduits(array("produit_id" => 2, "nb_item" => 1, "prix_ht" => "20"));

echo $order->addPacks(array("pack_id" => 2,"nb_item" => 2, "prix_ht" => "5"));

print_r($order);

$order->saveOrder();

$r = $order->getOrderSummary();
print_r($r);

$r = $order->getOrderDetail();
print_r($r);
?>
