<?php
if($_SESSION['statut'] !== "admin"){
	header('Location:index.php');
}
echo "admin";
?>
<button action="<?php session_destroy()?>"> déco </button>