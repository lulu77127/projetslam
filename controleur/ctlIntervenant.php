<?php 
session_start;
require_once './modele/ModelPersonnel.php';
$action = $_REQUEST['action'];
switch($action){
case 'pageintervenant':{
					include("vues/intervenant/inter.php");
					break;
				}
}
?>