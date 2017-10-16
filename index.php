<?php
session_start();
//include("vues/sommaire.php");
$statut=$_SESSION['statut'];
if(isset($_REQUEST['ctl']))
{ 
	$ctl = $_REQUEST['ctl'];
	switch($ctl)
	{
				case 'admin':
				{
					include ("controleur/ctlAdmin.php"); break;
				}
				case 'utilisateur':
				{
					include ("controleur/ctlUtilisateur.php"); break;
				}
				case 'intervenant':
				{
					include ("controleur/ctlIntervenant.php"); break;
				}
				case 'connection':
				{
					include("controleur/ctlConnection.php");break;
				}
	}
}
else {
	include("vues/connection/connexion.php");
	if(isset($statut)){
	header('Location: transfert.php');
}
	}
//include("vues/pied.php") ;

?>