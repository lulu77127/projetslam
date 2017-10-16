<?php
if($_SESSION['statut'] !== "intervenant"){
	header('Location:index.php');
}
echo "intervenant";
?>
<button action="<?php session_destroy()?>"> déco </button>