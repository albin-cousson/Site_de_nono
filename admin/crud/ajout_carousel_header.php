<?php 
  session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/admin_ajout_modification3.css"/>
  </head>
  <body>

    <?php

    include("../../bdd.php");

    $connexion = $bdd->prepare("SELECT pseudo, mot_de_passe FROM admin WHERE pseudo=?");
    $connexion->execute(array($_SESSION['pseudo']));
    $connexion_recu = $connexion->fetch();
    if ($_SESSION['pseudo'] == $connexion_recu['pseudo'] && password_verify($_SESSION['mot_de_passe'], $connexion_recu['mot_de_passe'])){

      $page = $_GET['page'];
      $table = $_GET['table'];
      $champ = $bdd->query("SHOW COLUMNS FROM $table");
      // foreign key "nom du chien"
      if (isset($_GET['foreignKey'])){
        $table_foreignKey = $_GET['foreignKey'];
        $foreignKey = $bdd->query("SELECT nom FROM $table_foreignKey");
      }
      ?>
      <form method="POST" action="<?php echo $page; ?>" class="d-flex flex-column justify-content-center align-items-center position-absolute">
      <?php
      
      //Apparait pour faire le lien entre les différents chiens de des pages mâle/femelle
        if (isset($_GET['foreignKey'])){
      ?>
        <p class="h5 text-light">Chien associé</p>
        <select class="mb-3" name="foreignKey">
          <?php
            while ($foreignKey_recu = $foreignKey->fetch()){
              ?><option><?php echo $foreignKey_recu['nom'];?></option><?php
            }
          ?>
        </select>
      <?php
        }
      ?>

      <!-- Renvoie le page associé -->
      <input style="display:none;" type="text" name="<?php echo $page ?>" value="<?php echo $page ?>"/> 

      <!-- Renvoie le table associé -->
        <input style="display:none;" type="text" name="<?php echo $table ?>" value="<?php echo $table ?>"/> 
      <?php

      while ($champ_recu = $champ->fetch()){
      ?>
        <div class="form-group d-flex flex-column justify-content-center align-items-center w-100">
          <label class="h5 text-light"><?php echo ucfirst($champ_recu['Field']) ?></label>
          <input type="text" name="<?php echo $champ_recu['Field'] ?>"/> 
        </div>
      <?php
      }
      ?>
        <button type="submit" class="btn btn-light h5 text-dark">Ajouter</button>
      </form>

      <a class="btn btn-outline-light position-absolute" href="<?php echo $page;?>">Retour</a>

    <?php
    }
    else {
      header("location:../erreur_connexion.php");
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="js/admin_ajout_modification1.js"></script>
  </body>
</html>