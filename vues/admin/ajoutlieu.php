<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajout lieu</title>
    <link rel="stylesheet" href="css/ajoutlieu.css">
	<meta charset="utf-8" />
    <meta name="author" content="" />
    <meta property="og:site_name" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
  <body class="align">
  <div class="grid">
    <form action="index.php?ctl=admin&action=creelieu" method="post" class="form addplace">
      <header class="addplace__header">
        <h3 class="register__title">Ajout Lieu</h3>
      </header>
      <div class="addplace__body">
        <div class="form__field">
          <input type="text" name ='lieu' placeholder="Nom Lieu" required>
        </div>
        <div class="addplace__field">
          <input type="text" name='bat' placeholder="Batîment" required>
        </div>
		<div class="addplace__field">
          <input type="text" name='etage' placeholder="Etage" required>
        </div>
      </div>
      <footer class="addplace__footer">
        <input type="submit" value="Confirmer">
      </footer>
    </form>
  </div>
</body>
</body>
</html>
