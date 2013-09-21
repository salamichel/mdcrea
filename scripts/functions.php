<?php

function RandomString() {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        @$randstring .= $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}

function getItemIdByOption($id) {
    global $db;

    $o = $db->where("option_id", $id)
            ->get("md_produit_options");

    return($o[0]["produit_id"]);
}

function getOptionPrice($id) {
    global $db;

    $o = $db->where("option_id", $id)
            ->get("md_options");

    return($o[0]["prix_ht"]);
}
function getOptionTitre($id) {
    global $db;

    $o = $db->where("option_id", $id)
            ->get("md_options");

    return($o[0]["titre"]);
}
function getItemTitre($id) {
    global $db;

    $o = $db->where("produit_id", $id)
            ->get("md_produits");

    return($o[0]["nom"]);
}

function sendNotification($title, $content) {
    global $admin_to,$admin_to2;

    $m = new PHPMailer();
    $m->AddAddress($admin_to);
    $m->AddAddress($admin_to2);
    $m->Subject = $title;
    $m->MsgHTML($content);
    $m->Send();
}

?>
