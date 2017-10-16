<?php 
session_start;
require_once './modele/ModelPersonnel.php';
$action = $_REQUEST['action'];
switch($action){
case 'pageadmin':{
					include("vues/admin/admin.php");
					break;
				}
case 'creationticket':{
	include("vues/utilisateur/creationticket.php");
	include("vues/utilisateur/header.php");
	
}
}
?>