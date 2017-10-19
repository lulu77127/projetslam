<?php
if($_SESSION['statut'] !== "utilisateur"){
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
      <link rel="stylesheet" href="css/user.css">
</head>

<body>
  <!---Inclure le Header--->
  <div class="wrapper">
    <section id='article'>
      <h2>Le Titre</h2>
		<p>Le Texte</p>
    </section>
	
	<section id='article'>
      <h2>Le Titre</h2>
      <p>Le Texte</p>  
    </section>
	
	<section id='article'>
      <h2>Le Titre</h2>
      <p>Le Texte</p> 
    </section>
	
  </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
