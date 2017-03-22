<?php
class Panier
{
	public $nbProduit;

	public function ajouterProduit(){
		return 'Le produit a été ajouté';
	}

	protected function retirerProduit(){
		return 'Le produit a été retiré';
	}

	private function affichePanier(){
		return 'Voici le panier';
	}
}

$panier1 = new Panier;
var_dump($panier1); //
var_dump(get_class_methods($panier1)); //Méthodes de l'objet public

$panier1 -> nbProduit = 5;
echo 'Panier1 :'.$panier1 -> nbProduit.'produit(s) dans le panier <br>';
echo 'Panier1 :'.$panier1 -> ajouterProduit().'produit(s) dans le panier <br>';