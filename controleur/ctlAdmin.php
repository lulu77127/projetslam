<?php 
session_start;
require_once './modele/ModelPersonnel.php';
$action = $_REQUEST['action'];
switch($action){
case 'pageadmin':{
					include("vues/admin/admin.php");
					include("vues/admin/header.php");
					break;
				}
case 'ajoutlieu':{
					include("vues/admin/ajoutlieu.php");
					include("vues/admin/header.php");
					break;
				}
case 'ajoutpersonne':{
					include("vues/admin/ajoutpersonne.php");
					include("vues/admin/header.php");
					break;
				}
case 'creelieu':{
		$lieu=$_POST['lieu'];
		$bat=$_POST['bat'];
		$etage=$_POST['etage'];
		ModelPersonnel::creelieu($lieu,$bat,$etage);
		header('Location: index.php');
	break;
}
case 'creeuser':{
	
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$login=$_POST['login'];
		$mdp=$_POST['mdp'];
		$mail=$_POST['mail'];
		$statut=$_POST['statut'];
		ModelPersonnel::creeuser($prenom,$nom,$mail,$login,$mdp,$statut);
		header('Location: index.php');
	break;
}
}
?>