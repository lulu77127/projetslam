<?php 
session_start;
require_once './modele/ModelPersonnel.php';
$action = $_REQUEST['action'];
switch($action){
case 'pageutilisateur':{
					include("vues/utilisateur/header.php");
					include("vues/utilisateur/utilisateur.php");
					break;
				}
case 'creationticket':{
	include("vues/utilisateur/creationticket.php");
	include("vues/utilisateur/header.php");
	break;
}
case 'creeinter':{
		$iduser=$_SESSION['id'];
		$obj=$_POST['objet'];
		$desc=$_POST['desc'];
		$grav=$_POST['gravite'];
		$lieu=$_POST['lieu'];
		$type=$_POST['type'];
		$idlieu=ModelPersonnel::recupidlieu($lieu);
		ModelPersonnel::creeinter($obj,$desc,$grav,$type,$iduser,$idlieu[0]);
		header('Location: index.php');
	break;
}
}
?>