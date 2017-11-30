<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajout Personne</title>
    <link rel="stylesheet" href="css/ajoutpersonne.css">
	<meta charset="utf-8" />
    <meta name="author" content="" />
    <meta property="og:site_name" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
  <body class="align">
  <div class="grid">
    <form action="index.php?ctl=admin&action=creeuser" method="post" class="form register">
      <header class="adduser__header">
        <h3 class="register__title">Ajout Personne</h3>
      </header>
      <div class="adduser__body">
        <div class="form__field">
          <input type="text" name='nom' placeholder="Nom" required>
        </div>
        <div class="adduser__field">
          <input type="text" name='prenom' placeholder="Prénom" required>
        </div>
		<div class="adduser__field">
          <input type="text" name='login' placeholder="Login" required>
        </div>
		<div class="adduser__field">
          <input type="password" name='mdp' placeholder="Mot de Passe" required>
        </div>
		<div class="adduser__field">
          <input type="email" name='mail' placeholder="Adresse Mail" required>
        </div>
		<select id="ListeStatut" name='statut'>
		<option value="utilisateur">Utilisateur</option> 
		<option value="intervenant">Intervenant</option>
		<option value="admin">Administrateur</option> 
		</select> 
      </div>
      <footer class="adduser__footer">
        <input type="submit" value="Confirmer">
      </footer>
    </form>
  </div>
</body>
</body>
</html>
