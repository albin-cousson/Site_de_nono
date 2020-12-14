<?php 
  session_start();
?>
<?php 

include("../../bdd.php");

$connexion = $bdd->prepare("SELECT pseudo, mot_de_passe FROM admin WHERE pseudo=?");
$connexion->execute(array($_SESSION['pseudo']));
$connexion_recu = $connexion->fetch();
if ($_SESSION['pseudo'] == $connexion_recu['pseudo'] && password_verify($_SESSION['mot_de_passe'], $connexion_recu['mot_de_passe'])){

    $page = $_GET['page'];
    $table = $_GET['table'];

    $suppression = $bdd->prepare("DELETE FROM $table WHERE id=?");
    $suppression->execute(array($_GET['id']));

    header("location:$page");

}
else {
  header("location:../erreur_connexion.php");
}

?>