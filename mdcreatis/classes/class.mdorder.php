<?php

class MDOrder {

    private $compte_id;
    private $reference;
    private $date_ajout;
    private $date_modification;
    private $status_id;
    private $commande_id;
    private $nb_total_items;
    private $produits;
    private $total_ht;
    private $point_fidelite;
    private $db;

    public function __construct($db) {
        $this->date_ajout = date("Y-m-d h:i:s");
        $this->status_id = 1;
        $this->produits = array();
        $this->nb_total_items = 0;
        $this->point_fidelite = 0;
        $this->total_ht = 0;
        $this->db = &$db;
    }

    public function getReference() {
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            @$randstring .= $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }

    public function setReference($ref) {
        $this->reference = $ref;
    }

    public function setStatus($status) {
        $this->status_id = $status;
        $this->date_modification = date("Y-m-d h:i:s");
    }

    public function setUser($id) {
        $this->compte_id = $id;
    }

    public function addProduits($produit) {
        array_push($this->produits, $produit);
        $this->nb_total_items += $produit["nb_item"];
        $this->total_ht += $produit["nb_item"] * $produit["prix_ht"];
    }

    public function delProduits($key) {
        //array_slice($this->produits, $key);
        unset($this->produits[$key]);
        $this->nb_total_items--;
    }

    public function saveOrder() {

        $insOrderFields = array(
            "compte_id" => $this->compte_id,
            "reference" => $this->reference,
            "nb_total_items" => $this->nb_total_items,
            "status_id" => $this->status_id,
            "total_ht" => $this->total_ht,
            "date_ajout" => $this->date_ajout,
            "point_fidelite" => $this->point_fidelite,
        );

        // insert le summary
        $this->commande_id = $this->db->insert("commandes", $insOrderFields);

        echo $this->commande_id;

        if ($this->commande_id > 0) {

            foreach ($this->produits as $produit) {

                print_r($produit);
                $insOrderDetailFields = array(
                    "commande_id" => $this->commande_id,
                    "produit_id" => $produit["produit_id"],
                    "nb_item" => $produit["nb_item"],
                    "total_ht_item" => $produit["nb_item"] * $produit["prix_ht"],
                );

                $this->db->insert("commande_detail", $insOrderDetailFields);
            }
        }
    }

    public function getOrderDetail() {
        $r = $this->db->where("commande_id", $this->commande_id)
                ->get("commande_detail");

        return($r);
    }

    public function getOrderSummary() {
        $r = $this->db->where("commande_id", $this->commande_id)
                ->get("commandes");

        return($r[0]);
    }

    public function setOrderId($id) {
        $this->commande_id = $id;
    }

}

?>
