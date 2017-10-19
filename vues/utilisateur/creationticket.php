<?php
require_once './modele/ModelPersonnel.php';
$id=1;
$alllieu=ModelPersonnel::recupalllieu();
if($_SESSION['statut'] !== "utilisateur"){
	header('Location:index.php');
}
?>
<head>
  <meta charset="UTF-8">
  <title>Creation Ticket</title>
    <link rel="stylesheet" href="css/createticket.css">
	<meta charset="utf-8" />
    <meta name="author" content="" />
    <meta property="og:site_name" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
  <body class="align">
  <div class="grid">
    <form enctype="multipart/form-data" action="index.php?ctl=utilisateur&action=creeinter" method="post" class="form ticket">
      <header class="ticket__header">
        <h3 class="ticket__title">Creation Ticket</h3>
      </header>
      <div class="ticket__body">
        <div class="form__field">
          <input type="text" placeholder="Objet" name="objet" required>
        </div>
		
		<div class="form__field">
          <SELECT name="lieu" > <?php $i=0; $countlieu=count($alllieu); while ($i!=$countlieu) { ?><OPTION>  <?php echo $alllieu[$i][0]; $i++; } ?> </OPTION> </SELECT>
        </div>
		
		<select id="ListeGravite" name="gravite">
		<option value="niveau1">Mineur</option> 
		<option value="niveau2">Génant</option> 
		<option value="niveau3">Semi-Bloquant</option> 
		<option value="niveau4">Bloquant</option> 
		</select> 
		
		<select id="ListeType" name="type">
		<option value="informatique">Informatique</option> 
		<option value="autre">Autre</option> 
		</select> 
		
		<textarea rows="12" cols="63" name="description" form="form ticket" placeholder="Entrez votre Message"></textarea>
		<div class="form__field">
        <input type="file" name="files">
        </div>
      </div>
      <footer class="ticket__footer">
        <input type="submit" value="Envoyer">
      </footer>
    </form>
  </div>
</body>
</body>
</html>
