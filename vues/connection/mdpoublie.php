<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mot de Passe oublié</title>
    <link rel="stylesheet" href="css/mdpstyle.css">
</head>
<body>
  <body class="align">
  <div class="grid">
    <form action="index.php?ctl=connection&action=modifmdp" method="post" class="form login">
      <header class="login__header">
        <h3 class="login__title">Mot de Passe oublié</h3>
      </header>
      <div class="login__body">
        <div class="form__field">
          <input type="email" placeholder="Mail" name="mail" required>
        </div>
      </div>
      <footer class="login__footer">
        <input type="submit" value="Envoyer">
		<?php
		session_start();
		if($_SESSION['ok']==1){
			echo "email envoyé";
			session_destroy();
		}
		if($_SESSION['non']==1){
			echo "Adresse email inconnue dans la bdd";
			session_destroy();
		}
		?>
      </footer>
    </form>
  </div>
</body>
</body>
</html>
