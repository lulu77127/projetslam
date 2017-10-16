<?php 
session_start;
require_once './modele/ModelPersonnel.php';
$action = $_REQUEST['action'];
switch($action){
case 'listerPersonne':{

					$listePersonnes = ModelPersonnel::getListePersonnel();
					
					
					include("vues/personne/VueListePersonnel.php");
					break;
				}
case 'insertPersonne':{
					include("vues/personne/VueAddPersonnel.php");
					if(isset($_POST['nom']))
					{
					$nom=$_POST['nom'];
					$email=$_POST['email'];
					$listePersonnes = ModelPersonnel::insertpersonne($nom,$email);
					
					break;
					}
				}
case 'suprPersonne':{
	                 include("vues/personne/VueListePersonnel.php");
	                 if(isset($_GET['id']))
	                 {
					$id=$_GET['id'];
					$listePersonnes = ModelPersonnel::suprPersonne($id);
					
					break;
}
}
case 'editPersonne':{
	                 include("vues/personne/Editpersonne.php");
	                 if(!isset($_GET['id']))
	                 {
					$nom=$_GET['nom'];
					$mail=$_GET['mail'];
					$id=$_GET['id'];
					$listePersonnes = ModelPersonnel::editPersonne($nom,$mail,$id);
					
					break;
}
}
case 'veriflogin':{
	//include("vues/personne/Vuelogin.php");
	if(isset($_POST['login']) && isset($_POST['password'])) {
	$login = $_POST['login'];
    $mdp = $_POST['password'];
	$user=ModelPersonnel::veriflogin($login,$mdp);
	if(is_array($user)){
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $user['id'];
        $statut = $user['statut'];
        $_SESSION['statut']=$statut;
		if ($statut=="admin"){
			header ('Location: index.php?ctl=admin&action=pageadmin');
		}
		if ($statut=="utilisateur"){
			header ('Location: index.php?ctl=utilisateur&action=pageutilisateur');
		}
		if ($statut=="intervenant"){
			header ('Location: index.php?ctl=intervenant&action=pageintervenant');
		}
	}
	else {
		$cnon=1;
		$_SESSION['cnon']=$cnon;
		header ('Location: index.php');
		}
break;
}
}
case 'modifmdp':{
	include("metier/function.php");
	if(isset($_POST['mail'])){
		$mail=$_POST['mail'];
		$id1=ModelPersonnel::recupid($mail);
		if(isset($id1) && $id1!=NULL){
			$id=$id1;
			$mdp=genererMDP();
			ModelPersonnel::modifmdp($id,$mdp);
			envoiMail($mail,$mdp);
			$ok=1;
			$_SESSION['ok']=$ok;
			header('Location: http://arbelgdi.alwaysdata.net/index.php?ctl=connection&action=pagemodifmdp');
		}
		else {
			$non=1;
			$_SESSION['non']=$non;
			header('Location: http://arbelgdi.alwaysdata.net/index.php?ctl=connection&action=pagemodifmdp');
			}
	}
	break;
}
case 'pagemodifmdp':{
		include("vues/connection/mdpoublie.php");
}

}
?>