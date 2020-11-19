<?php 

include("../../bdd.php");

$table = $_GET['table'];

$suppression = $bdd->prepare("DELETE FROM $table WHERE id=?");
$suppression->execute(array($_GET['id']));

header("location:../admin_accueil.php");

?>