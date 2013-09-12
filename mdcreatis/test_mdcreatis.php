<?php

include 'classes/class.mdcreatis.php';
include ("config/settings.php");
require_once('classes/MysqliDb.php');
require_once('classes/phpmailer.php');
require_once("scripts/functions.php");

//connexion base de données
$db = new Mysqlidb($bdd_host, $bdd_user, $bdd_pwd, $bdd_name);


include 'template/script/test.php';
?>
