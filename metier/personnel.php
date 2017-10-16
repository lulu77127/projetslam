<?php
class personnel
{
	private $id;
	private $login;
	private $mdp;
	private $nom;
	private $prenom;
	private $email;
	private $mobile;
	private $acces;
	private $idService;
	private $idFonction;
	
	public function __construct($unId, $unLogin, $unMdp, $unNom, $unPrenom, $unEmail, $unMobile, $unAcces, $unIdService, $unIdFonction)
	{
		$id = $unId;
		$login = $unLogin;
		$mdp = $unMdp;
		$nom = $unNom;
		$prenom = $unPrenom;
		$email = $unEmail;
		$mobile = $unMobile;
		$acces = $unAcces;
		$idService = $unIdService;
		$idFonction = $unIdFonction;
	}
	
	public function getLogin(){
		return $login;
	}
	public function getMdp(){
		return $mdp;
	}
	public function getNom(){
		return $nom;
	}
	public function getPrenom(){
		return $prenom;
	}
	public function getEmail(){
		return $email;
	}
	public function getMobile(){
		return $mobile;
	}
	public function getAcces(){
		return $acces;
	}
	public function getIdService(){
		return $idService;
	}
	public function getIdFonction(){
		return $idFonction;
	}
}
?>