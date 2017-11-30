<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Information Ticket</title>
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
        <h3 class="ticket__title">Information Ticket</h3>
      </header>
      <div class="ticket__body">
        <div class="form__field">
          <input type="text" placeholder="Objet" name="objet" required>
        </div>
		 
		<div class="form__field">
          <SELECT name="intervenant" > <?php $i=0; $countintervenant=count($allintervenant); while ($i!=$countintervenant) { ?><OPTION>  <?php echo $allintervenant[$i][0]; $i++; } ?> </OPTION> </SELECT>
        </div>
				
		<select id="ListeType" name="type">
		<option value="informatique">Informatique</option> 
		<option value="autre">Autre</option> 
		</select> 
		
		<textarea rows="12" cols="63" name="desc" placeholder="Entrez votre Message"></textarea>
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