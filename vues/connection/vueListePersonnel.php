<html>
<div id="contenu">
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="main">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-1" class="form">
						<h1>Gestion de Flotte MSL</h1>
						<br>
						
					</div>
						<table border="1" text-align="center" class="table col-md-4">
							<tr>
								<td class="titre_td">id</td>
								<td class="titre_td">Nom</td>
								<td class="titre_td">Email</td>
							  </tr>
						
							<tr>
							<?php  if(isset($listePersonnes)){
							foreach($listePersonnes as $unePersonne)
							{?>
							<td><?php echo $unePersonne[0]?></td>
							<td><?php echo $unePersonne[1]?></td>
							<td><?php echo $unePersonne[2]?></td>
							<td><?php echo "<a href='./index.php?ctl=personne&action=suprPersonne&id=".$unePersonne[0]."'>"?>Supprimer</a></td>
							<td><?php echo "<a href='./index.php?ctl=personne&action=editPersonne&id=".$unePersonne[0]."&nom=".$unePersonne[1]."&mail=".$unePersonne[2]."'>"?>Editer</a></td>
							</tr>
							<?php 
							}
							}
							?>
							

</table>
</div>
</div>
</div>
</div>
</html>