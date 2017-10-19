<?php
if($_SESSION['statut'] !== "admin"){
	header('Location:index.php');
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sticky Header CSS Transition</title>
      <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <div class="wrapper">
    <section id='article'>
      <h2>Panel d'Administration</h2>
		<p>Ajouter un Lieu</p>
		<p>Modifier un Lieu</p>
		<p>Ajouter un Utilisateur</p>
		<p>Modifier un Utilisateur</pygfuio>
    </section>
  </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>