<?php


require('libs/Smarty.class.php');

$smarty = new Smarty;



$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("conf_link","lent");

$smarty->display('welcome.tpl');

?>
