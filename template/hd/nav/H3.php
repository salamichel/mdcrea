<?
$cart = new Panier();
$items = $cart->showCart();
$p = count($items);
?>
<li><a href="index.php?page=cad">Mon Panier (<?= $p ?>)</a></li>