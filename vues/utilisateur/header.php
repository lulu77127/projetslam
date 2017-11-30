<?php
if($_SESSION['statut'] !== "utilisateur"){
	header('Location:index.php');
}
?>
<html lang="fr">
<header>
<link rel="stylesheet" href="css/header.css">
    <nav>
      <a href="index.php">Acceuil</a>
      <a href="index.php?ctl=utilisateur&action=creationticket">Rapporter un Incident</a>
	  <a href="vues/disconnect.php">Déconnexion</a>
    </nav>
</header>
