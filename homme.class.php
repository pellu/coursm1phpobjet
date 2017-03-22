<?php
//Chapitre 2
class Homme{
	private $prenom;
	private $nom;

	public function setPrenom($arg){
		if(is_string($arg)){
			if(strlen($arg) > 3 && strlen($arg) < 25){
				$this -> prenom = $arg;
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}
	public function getPrenom(){
		return $this -> prenom;
	}
	public function setNom($arg){
		$this -> nom = $arg;
	}
	public function getNom(){
		return $this -> nom;
	}
}
$homme = new Homme;
$homme -> setPrenom('Paul');
echo $homme -> getPrenom().'<br>';
$homme -> setNom('Paul');
echo $homme -> getNom().'<br>';


class Membre{
	private $pseudo;
	private $mdp;

	public function setPseudo($arg){
		if(is_string($arg)){
			if(strlen($arg) > 3 && strlen($arg) < 25){
				$this -> pseudo = $arg;
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}
	public function getPseudo(){
		return $this -> pseudo;
	}
	public function setMdp($arg){
		$this -> mdp = sha1($arg);
	}
	public function getMdp(){
		return $this -> mdp;
	}
}
$membre = new Membre;



$membre -> setPseudo('Paul');
echo $membre -> getPseudo().'<br>';
$membre -> setMdp('Prgergtrgergaul');
echo $membre -> getMdp().'<br>';