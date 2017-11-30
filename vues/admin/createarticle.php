<head>
  <meta charset="UTF-8">
  <title>Creation Article</title>
    <link rel="stylesheet" href="css/createarticle.css">
	<meta charset="utf-8" />
    <meta name="author" content="" />
    <meta property="og:site_name" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
  <body class="align">
  <div class="grid">
    <form enctype="multipart/form-data" action="index.php?ctl=utilisateur&action=creeinter" method="post" class="form article">
      <header class="article__header">
        <h3 class="article__title">Creation Article</h3>
      </header>
      <div class="article__body">
        <div class="form__field">
          <input type="text" placeholder="Titre de l'Article" name="titre" required>
        </div>
		
		<textarea rows="12" cols="63" name="description" form="form article" placeholder="Ecrivez ici le contenu de l'article"></textarea>
		<div class="form__field">
        <input type="file" name="files">
        </div>
      </div>
      <footer class="article__footer">
        <input type="submit" value="Envoyer">
      </footer>
    </form>
  </div>
</body>
</body>
</html>
