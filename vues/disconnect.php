<?php
//Ici on detruit la session et redirige
session_start();
$_SESSION = array();
session_destroy();
header('Location: ../index.php');
?>