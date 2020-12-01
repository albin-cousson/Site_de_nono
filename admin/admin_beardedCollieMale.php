<?php 
  if (isset($_POST['pseudo']) && isset($_POST['mot_de_passe'])){
    setcookie('pseudo', $_POST['pseudo'], time() + 3600);
    setcookie('mot_de_passe', $_POST['mot_de_passe'], time() + 3600);
  }
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/admin4.css"/>
  </head>
  <body class="d-flex flex-column justify-content-center align-items-center pb-5">

    <?php 

        include("../bdd.php");

        $connexion = $bdd->query("SELECT pseudo, mot_de_passe FROM admin");
        while ($connexion_recu = $connexion->fetch()){
          if (isset($_POST['pseudo'])) {
            if ($connexion_recu["pseudo"] == $_POST['pseudo'] && $connexion_recu["mot_de_passe"] == $_POST['mot_de_passe'] || $_COOKIE['pseudo'] == $connexion_recu['pseudo'] && $_COOKIE['mot_de_passe'] == $connexion_recu['mot_de_passe']){
              ?>
                <!--<--<--<--<--<--<--<--<--<--<--<--<-- Navbar -->
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 p-0">
                    <nav class="navbar navbar-dark d-flex justify-content-between align-items-center bg-dark">
                        <ul class="navbar-nav d-flex flex-row">
                          <li class="nav-item">
                            <a class="nav-link mr-3" href="./admin_accueil.php">
                              Accueil
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Bearded collie
                            </a>
                            <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./admin_beardedCollieMale.php">Mâle</a>
                              <a class="dropdown-item" href="#">Femelle</a>
                            </div>
                          </li>
                        </ul>
                        <a class="btn btn-light" href="deconexion.php">
                          Deconexion
                        </a>
                      </nav>
                    </div>
                  </div>

                  <!--<--<--<--<--<--<--<--<--<--<--<--<-- header -->
                  <div class="row">
                    <div class="col-12 mt-5">
                      <div class="m-auto w-75">
                        <table class="w-100">
                          <caption class="position-relative">
                            <div class="position-absolute"></div>
                            <nav class="navbar p-0">
                              <p class="h1 text-light m-0 position-relative">Header</p>
                              <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_header">Ajouter</a>
                            </nav>
                          </caption>
                          <?php
                              ?>
                                <th>Titre</th>
                                <th>Image</th>
                              <?php
                              ?>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                              <?php
                            $entres = $bdd->query("SELECT titre, image, id FROM beardedCollieMale_header");
                            while($entres_recu = $entres->fetch()){
                              ?>
                                <tr>
                                  <td>
                                    <?php echo $entres_recu['titre'] ?>
                                  </td>
                                  <td>
                                    <?php echo substr($entres_recu['image'],0,30)."..." ?>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_header&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_header&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
                                  </td>
                                </tr>
                              <?php
                            }
                          ?>
                        </table>
                      </div>
                    </div>
                  </div>

                <!-- Ajout -->
                <?php
                if (isset($_POST['titre'])){
                  $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_header(titre, image) VALUE (?,?)");
                  $ajout->execute(array($_POST['titre'], $_POST['image'])); 
                }
                ?>

                <!-- Modification -->
                <?php
                if (isset($_GET['titre'])){
                  $modification = $bdd->prepare("UPDATE beardedCollieMale_header SET titre=?, image=? WHERE id=?");
                  $modification->execute(array($_GET['titre'], $_GET['image'], $_GET['id'])); 
                }
                ?>

              <?php
            }
            else {
                header("location:erreur_connexion.php");
            }
          }
          elseif (!isset($_POST['pseudo'])) {
            if ($_COOKIE['pseudo'] == $connexion_recu['pseudo'] && $_COOKIE['mot_de_passe'] == $connexion_recu['mot_de_passe']){
              ?>
                <!--<--<--<--<--<--<--<--<--<--<--<--<-- Navbar -->
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 p-0">
                      <nav class="navbar navbar-dark d-flex justify-content-between align-items-center bg-dark">
                        <ul class="navbar-nav d-flex flex-row">
                          <li class="nav-item">
                            <a class="nav-link mr-3" href="./admin_accueil.php">
                              Accueil
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Bearded collie
                            </a>
                            <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./admin_beardedCollieMale.php">Mâle</a>
                              <a class="dropdown-item" href="#">Femelle</a>
                            </div>
                          </li>
                        </ul>
                        <a class="btn btn-light" href="deconexion.php">
                          Deconexion
                        </a>
                      </nav>
                    </div>
                  </div>

                  <!--<--<--<--<--<--<--<--<--<--<--<--<-- header -->
                  <div class="row">
                    <div class="col-12 mt-5">
                      <div class="m-auto w-75">
                        <table class="w-100">
                          <caption class="position-relative">
                            <div class="position-absolute"></div>
                            <nav class="navbar p-0">
                              <p class="h1 text-light m-0 position-relative">Header</p>
                              <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_header">Ajouter</a>
                            </nav>
                          </caption>
                          <?php
                              ?>
                                <th>Titre</th>
                                <th>Image</th>
                              <?php
                              ?>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                              <?php
                            $entres = $bdd->query("SELECT titre, image, id FROM beardedCollieMale_header");
                            while($entres_recu = $entres->fetch()){
                              ?>
                                <tr>
                                  <td>
                                    <?php echo $entres_recu['titre'] ?>
                                  </td>
                                  <td>
                                    <?php echo substr($entres_recu['image'],0,30)."..." ?>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_header&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_header&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
                                  </td>
                                </tr>
                              <?php
                            }
                          ?>
                        </table>
                      </div>
                    </div>
                  </div>

                <!-- Ajout -->
                <?php
                if (isset($_POST['titre'])){
                  $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_header(titre, image) VALUE (?,?)");
                  $ajout->execute(array($_POST['titre'], $_POST['image'])); 
                }
                ?>

                <!-- Modification -->
                <?php
                if (isset($_GET['titre'])){
                  $modification = $bdd->prepare("UPDATE beardedCollieMale_header SET titre=?, image=? WHERE id=?");
                  $modification->execute(array($_GET['titre'], $_GET['image'], $_GET['id'])); 
                }
                ?>

                <!--<--<--<--<--<--<--<--<--<--<--<--<-- Block présentation: Nom des chiens -->
                <div class="row">
                    <div class="col-12 mt-5">
                      <div class="m-auto w-75">
                        <table class="w-100">
                          <caption class="position-relative">
                            <div class="position-absolute"></div>
                            <nav class="navbar p-0">
                              <p class="h1 text-light m-0 position-relative">Nom des chiens</p>
                              <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_nomDuChien">Ajouter</a>
                            </nav>
                          </caption>
                          <?php
                              ?>
                                <th>Nom</th>
                              <?php
                              ?>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                              <?php
                            $entres = $bdd->query("SELECT nom, id FROM beardedCollieMale_nomDuChien");
                            while($entres_recu = $entres->fetch()){
                              ?>
                                <tr>
                                  <td>
                                    <?php echo $entres_recu['nom'] ?>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_nomDuChien&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_nomDuChien&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
                                  </td>
                                </tr>
                              <?php
                            }
                          ?>
                        </table>
                      </div>
                    </div>
                  </div>

                <!-- Ajout -->
                <?php
                if (isset($_POST['nom'])){
                  $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_nomDuChien(nom) VALUE (?)");
                  $ajout->execute(array($_POST['nom'])); 
                }
                ?>

                <!-- Modification -->
                <?php
                if (isset($_GET['nom'])){
                  $modification = $bdd->prepare("UPDATE beardedCollieMale_nomDuChien SET nom=? WHERE id=?");
                  $modification->execute(array($_GET['nom'], $_GET['id'])); 
                }
                ?>
                
              <?php

            }
            else {
                header("location:erreur_connexion.php");
            }
          }
        }

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/admin1.js"> </script>
  </body>
</html>