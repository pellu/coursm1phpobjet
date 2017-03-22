<?php
//Chapitre 1
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
echo "<pre>";
var_dump($panier1);
echo "</pre>";
echo "<pre>";
var_dump(get_class_methods($panier1)); //Méthodes de l'objet public
echo "</pre>";

$panier1 -> nbProduit = 5;
echo 'Panier1 : '.$panier1 -> nbProduit.'produit(s) dans le panier <br>';
echo 'Panier1 : '.$panier1 -> ajouterProduit().'produit(s) dans le panier <br>';

/*
Public: Accès tout le monde
Protected: Accès depuis la class et ses enfants
private: Accès depuis la class

new : créé une instance objet
Une class peut avoir plusieurs objets
$panier1 représent un objet de la classe Panier
*/