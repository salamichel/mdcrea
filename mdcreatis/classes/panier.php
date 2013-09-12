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
	function __construct(){ // constructeur
		@session_start();
		if (!isset($_SESSION['cart'])) $_SESSION['cart']=array();
		$this->panier =& $_SESSION['cart'];
	}

	// ajouter un article $refproduit
	public function addItem($refproduit="",$nb=1){
		@$this->panier[$refproduit]['quantity'] += $nb;
		if ($nb <= 0) unset ($this->panier[$refproduit]);
	}
	
	// supprimer un article $refproduit
	public function removeItem($refproduit="",$nb=1){
		@$this->panier[$refproduit]['quantity'] -= $nb;
		if ($nb <= 0) unset ($this->panier[$refproduit]);
	}
	
		// choisir la quantité d'article $refproduit
	public function setQuantity($refproduit="",$toSet=""){
		@$this->panier[$refproduit]['quantity'] = $toSet ;
		if ($toSet <= 0) unset ($this->panier[$refproduit]);
	}
	
	// afficher la quantité de produits dans le panier
	// paramètre : $refproduit : permet d'afficher la quantité pour le produit de cette référence
	// si le paramètre est vide, on affiche la quantité totale de produit
	public function showQuantity($refproduit=""){
		if ($refproduit) {
			return $this->panier[$refproduit]['quantity'];
		}else{
			$total = 0;
			foreach($this->panier as $ref => $data) {
				$total += $data['quantity'];
			}
		}
			return $total;
	}
	
	// afficher la liste des articles (et accessoirement, leur quantité)
	
	public function showCart(){
			$list = array();
			$i = 0;
			foreach($this->panier as $ref => $data) {
				$list['ref'][$i] = $ref;
				$list['qte'][$i] = $data['quantity'];
				$i++;
			}
			return $list;
	}
	
} // fin de la classe
?>