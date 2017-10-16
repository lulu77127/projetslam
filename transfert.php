<?php
session_start();
$statut=$_SESSION['statut'];
$_SESSION['verif']=1;
if(isset($statut)){
	switch($statut){
	case 'admin':
	{
	header ('Location: http://arbelgdi.alwaysdata.net/index.php?ctl=admin&action=pageadmin');
	break;
	}
	case 'utilisateur':
	{
	header ('Location: http://arbelgdi.alwaysdata.net/index.php?ctl=utilisateur&action=pageutilisateur');
	break;
	}
	case 'intervenant':
	{
	header ('Location: http://arbelgdi.alwaysdata.net/index.php?ctl=utilisateur&action=pageintervenant');
	break;
	}
	}
}