<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Modification Utilisateur</title>
    <link rel="stylesheet" href="css/modifications.css">
	<meta charset="utf-8" />
    <meta name="author" content="" />
    <meta property="og:site_name" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
  <body class="align">
  <div class="grid">
    <form action="" method="post" class="form modification">
      <header class="modification__header">
        <h3 class="modification__title">Modification Utilisateur</h3>
      </header>
      <div class="modification__body">
        <div class="form__field">
          <input type="text" placeholder="Nom" required>
        </div>
        <div class="form__field">
          <input type="text" placeholder="Prénom" required>
        </div>
		<div class="form__field">
          <input type="email" placeholder="Mail" required>
        </div>
		<div class="form__field">
          <input type="text" placeholder="Identifiant" required>
        </div>
		<div class="form__field">
          <input type="text" placeholder="Mot de Passe" required>
        </div>
		<select id="ListeGroupe" name="groupe">
		<option value="utilisateur">Utilisateur</option> 
		<option value="intervenant">Intervenant</option> 
		<option value="administrateur">Administrateur</option> 
		</select> 
      </div>
      <footer class="modification__footer">
        <input type="submit" value="Modifier">
      </footer>
    </form>
  </div>
</body>
</body>
</html>
