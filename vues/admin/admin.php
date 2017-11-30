<?php
if($_SESSION['statut'] !== "admin"){
	header('Location:index.php');
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Panel Administration</title>
      <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <div class="wrapper">
    <section id='article'>
      <h2>Panel d'Administration</h2>
	<br><br><br>
		<p><a href="index.php?ctl=admin&action=ajoutlieu"> Ajouter un lieu </a></p>
		<p>Modifier un Lieu</p>
		<p> <a href="index.php?ctl=admin&action=ajoutpersonne"> Ajouter un Utilisateur </a></p>
		<p>Ajouter un Utilisateur avec un fichier texte</p>
		<p>Modifier un Utilisateur</p>
		<p>Création d'une actualité</p>
    </section>
  </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>