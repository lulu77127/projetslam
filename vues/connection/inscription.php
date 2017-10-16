<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
    <link rel="stylesheet" href="css/rstyle.css">
	<meta charset="utf-8" />
    <meta name="author" content="" />
    <meta property="og:site_name" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
  <body class="align">
  <div class="grid">
    <form action="index.php?ctl=personne&action=veriflogin" method="post" class="form register">
      <header class="register__header">
        <h3 class="register__title">Inscription</h3>
      </header>
      <div class="register__body">
        <div class="form__field">
          <input type="text" placeholder="Identifiant" required>
        </div>
        <div class="form__field">
          <input type="text" placeholder="Nom" required>
        </div>
		<div class="form__field">
          <input type="text" placeholder="Prénom" required>
        </div>
		<div class="form__field">
          <input type="email" placeholder="Adresse Mail" required>
        </div>
		<div class="form__field">
          <input type="password" placeholder="Mot de Passe" required>
        </div>
      </div>
      <footer class="register__footer">
        <input type="submit" value="Inscription">
        <p><a href="#">j'ai déjà un compte</a></p>
      </footer>
    </form>
  </div>
</body>
</body>
</html>
