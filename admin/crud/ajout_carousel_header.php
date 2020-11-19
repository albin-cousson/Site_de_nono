<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/admin_ajout_modification2.css"/>
  </head>
  <body>

    <a class="btn btn-outline-light position-absolute" href="../admin_accueil.php">Retour à l'accueil</a>

    <?php

    include("../../bdd.php");

    $table = $_GET['table'];
    $champ = $bdd->query("SHOW COLUMNS FROM $table");
    ?>
    <form method="POST" action="../admin_accueil.php" class="d-flex flex-column justify-content-center align-items-center position-absolute">
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

  </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="js/admin_ajout_modification1.js"></script>
  </body>
</html>