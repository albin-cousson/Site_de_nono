<?php 

include("../../bdd.php");

$page = $_GET['page'];
$table = $_GET['table'];

$suppression = $bdd->prepare("DELETE FROM $table WHERE id=?");
$suppression->execute(array($_GET['id']));

header("location:$page");

?>