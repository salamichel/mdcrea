<?PHP

//
// Cart Class (juillet 2005)
// Nordine Ghachi
// from TanukiDesign
// http://www.tanukidesign.com
//
class Panier {

    private $panier = array();

    // constructeur
    function __construct() { // constructeur
        @session_start();
        if (!isset($_SESSION['cart']))
            $_SESSION['cart'] = array();
        $this->panier = & $_SESSION['cart'];
    }

    // ajouter un article $refproduit
    public function addItem($refproduit = "", $nb = 1, $prix = 0) {
        @$this->panier[$refproduit]['quantity'] += $nb;
        @$this->panier[$refproduit]['prix'] += $prix;
        if ($nb <= 0)
            unset($this->panier[$refproduit]);
    }

    // supprimer un article $refproduit
    public function removeItem($refproduit = "", $nb = 1) {
        @$this->panier[$refproduit]['quantity'] -= $nb;
        if ($nb <= 0)
            unset($this->panier[$refproduit]);
    }

    // choisir la quantit� d'article $refproduit
    public function setQuantity($refproduit = "", $toSet = "") {
        @$this->panier[$refproduit]['quantity'] = $toSet;
        if ($toSet <= 0)
            unset($this->panier[$refproduit]);
    }

    // afficher la quantit� de produits dans le panier
    // param�tre : $refproduit : permet d'afficher la quantit� pour le produit de cette r�f�rence
    // si le param�tre est vide, on affiche la quantit� totale de produit
    public function showQuantity($refproduit = "") {
        if ($refproduit) {
            return $this->panier[$refproduit]['quantity'];
        } else {
            $total = 0;
            foreach ($this->panier as $ref => $data) {
                $total += $data['quantity'];
            }
        }
        return $total;
    }

    // afficher la liste des articles (et accessoirement, leur quantit�)

    public function showCart() {
        $list = array();
        $i = 0;
        foreach ($this->panier as $ref => $data) {
            if (!empty($ref)) {
                $list[$i]["id"] = $ref;
                $list[$i]["qte"] = $data['quantity'];
                $list[$i]["prix"] = $data['prix'];
                $i++;
            }
        }
        return $list;
    }

    public function addContact($contact) {
        $this->panier[0]["contact"] = $contact;
    }

    public function getContact() {
        return($this->panier[0]["contact"]);
    }

    public function flush() {

        $this->panier = array();
        unset($_SESSION['cart']);
    }

}

// fin de la classe
?>