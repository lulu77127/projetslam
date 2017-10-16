<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
    <link rel="stylesheet" href="css/loginstyle.css">
	<meta charset="utf-8" />
    <meta name="author" content="" />
    <meta property="og:site_name" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
  <body class="align">
  <div class="grid">
    <form action="index.php?ctl=connection&action=veriflogin" method="post" class="form login">
      <header class="login__header">
        <h3 class="login__title">Connexion</h3>
      </header>
      <div class="login__body">
        <div class="form__field">
          <input type="text" placeholder="Identifiant" name="login" required >
        </div>
        <div class="form__field">
          <input type="password" placeholder="Mot de Passe" name="password" required >
        </div>
      </div>
      <footer class="login__footer">
        <input type="submit" value="Connexion">
        <p><span class="icon icon--info">?</span><a href="index.php?ctl=connection&action=pagemodifmdp">Mot de Passe oublié</a></p>
      </footer>
	  	<?php
		session_start();
		if($_SESSION['cnon']==1){
			echo "Utilisateur non reconnu dans la bdd";
			session_destroy();
		}
		?>
    </form>
  </div>
</body>
</body>
</html>
