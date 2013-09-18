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

?>
