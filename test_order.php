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

echo "ok";


$order = new MDOrder($db);

$order->setUser(36);
$ref = $order->getReference();
echo $order->setReference($ref);
echo $order->addProduits(array("produit_id" => 1, "nb_item" => 10, "prix_ht" => "5.5"));
echo $order->addProduits(array("produit_id" => 2, "nb_item" => 5, "prix_ht" => "3.75"));
print_r($order);

$order->saveOrder();

$r = $order->getOrderSummary();
print_r($r);

$r = $order->getOrderDetail();
print_r($r);
?>
