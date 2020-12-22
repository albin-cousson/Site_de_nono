<?php 
  session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
  <title>Élevage de Saint Prixe - Éspace admin - Bearded collie mâle </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/admin6.css"/>
  </head>
  <body class="d-flex flex-column justify-content-center align-items-center pb-5">

    <?php 

        include("../bdd.php");

        $connexion = $bdd->prepare("SELECT pseudo, mot_de_passe FROM admin WHERE pseudo=?");
        $connexion->execute(array($_SESSION['pseudo']));
        $connexion_recu = $connexion->fetch();
        if ($_SESSION['pseudo'] == $connexion_recu['pseudo'] && password_verify($_SESSION['mot_de_passe'], $connexion_recu['mot_de_passe'])){
          include("header.php");
          ?>

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
            if (isset($_POST['beardedCollieMale_header'])){
              $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_header(titre, image) VALUE (?,?)");
              $ajout->execute(array($_POST['titre'], $_POST['image'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['beardedCollieMale_header'])){
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
                          <p class="h1 text-light m-0 position-relative">Noms des chiens</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_nomDuChien">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Nom du chien</th>
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
            if (isset($_POST['beardedCollieMale_nomDuChien'])){
              $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_nomDuChien(nom) VALUE (?)");
              $ajout->execute(array($_POST['nom'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['beardedCollieMale_nomDuChien'])){
              $modification = $bdd->prepare("UPDATE beardedCollieMale_nomDuChien SET nom=? WHERE id=?");
              $modification->execute(array($_GET['nom'], $_GET['id'])); 
            }
            ?>

              <!--<--<--<--<--<--<--<--<--<--<--<--<-- Block présentation: images des sliders -->
              <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Images des sliders</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionSlider&foreignKey=beardedCollieMale_nomDuChien">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Nom du chien</th>
                            <th>Images</th>
                            <th>Position</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT beardedCollieMale_nomDuChien.nom, beardedCollieMale_blockPresentaionSlider.images, beardedCollieMale_blockPresentaionSlider.position, beardedCollieMale_blockPresentaionSlider.id FROM beardedCollieMale_nomDuChien, beardedCollieMale_blockPresentaionSlider WHERE beardedCollieMale_nomDuChien.id=beardedCollieMale_blockPresentaionSlider.id_nomDuChien");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo $entres_recu['nom'] ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['images'],0,30)."..." ?>
                              </td>
                              <td>
                                <?php echo $entres_recu['position'] ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionSlider&id=<?php echo $entres_recu['id'] ?>&foreignKey=beardedCollieMale_nomDuChien">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionSlider&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['beardedCollieMale_blockPresentaionSlider'])){
              $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_blockPresentaionSlider(images, position, id_nomDuChien) VALUE (?,?,?)");
              $foreignKey = $bdd->prepare("SELECT id FROM beardedCollieMale_nomDuChien WHERE nom=?");
              $foreignKey->execute((array($_POST['foreignKey'])));
              $foreignKey_recu = $foreignKey->fetch();
              $ajout->execute(array($_POST['images'], $_POST['position'], $foreignKey_recu['id'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['beardedCollieMale_blockPresentaionSlider'])){
              $modification = $bdd->prepare("UPDATE beardedCollieMale_blockPresentaionSlider SET images=?, position=?, id_nomDuChien=? WHERE id=?");
              $foreignKey = $bdd->prepare("SELECT id FROM beardedCollieMale_nomDuChien WHERE nom=?");
              $foreignKey->execute((array($_GET['foreignKey'])));
              $foreignKey_recu = $foreignKey->fetch();
              $modification->execute(array($_GET['images'], $_GET['position'], $foreignKey_recu['id'], $_GET['id'])); 
            }
            ?>

              <!--<--<--<--<--<--<--<--<--<--<--<--<-- Block présentation: Profiles -->
              <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Profiles des chiens</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionProfile&foreignKey=beardedCollieMale_nomDuChien">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Nom du chien</th>
                            <th>Date de naissance</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT beardedCollieMale_nomDuChien.nom, beardedCollieMale_blockPresentaionProfile.date_naissance, beardedCollieMale_blockPresentaionProfile.id_nomDuChien, beardedCollieMale_blockPresentaionProfile.id FROM beardedCollieMale_nomDuChien, beardedCollieMale_blockPresentaionProfile WHERE beardedCollieMale_nomDuChien.id=beardedCollieMale_blockPresentaionProfile.id_nomDuChien");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo $entres_recu['nom'] ?>
                              </td>
                              <td>
                                <?php echo $entres_recu['date_naissance'] ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionProfile&id=<?php echo $entres_recu['id'] ?>&foreignKey=beardedCollieMale_nomDuChien">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionProfile&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['beardedCollieMale_blockPresentaionProfile'])){
              $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_blockPresentaionProfile(date_naissance, id_nomDuChien) VALUE (?,?)");
              $foreignKey = $bdd->prepare("SELECT id FROM beardedCollieMale_nomDuChien WHERE nom=?");
              $foreignKey->execute((array($_POST['foreignKey'])));
              $foreignKey_recu = $foreignKey->fetch();
              $ajout->execute(array($_POST['date_naissance'], $foreignKey_recu['id'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['beardedCollieMale_blockPresentaionProfile'])){
              $modification = $bdd->prepare("UPDATE beardedCollieMale_blockPresentaionProfile SET date_naissance=?, id_nomDuChien=? WHERE id=?");
              $foreignKey = $bdd->prepare("SELECT id FROM beardedCollieMale_nomDuChien WHERE nom=?");
              $foreignKey->execute((array($_GET['foreignKey'])));
              $foreignKey_recu = $foreignKey->fetch();
              $modification->execute(array($_GET['date_naissance'], $foreignKey_recu['id'], $_GET['id'])); 
            }
            ?>

              <!--<--<--<--<--<--<--<--<--<--<--<--<-- Block présentation: Résultats -->
              <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Résultats des chiens</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionResultat&foreignKey=beardedCollieMale_nomDuChien">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Nom du chien</th>
                            <th>Titre</th>
                            <th>Juge</th>
                            <th>Résultat</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT beardedCollieMale_nomDuChien.nom, beardedCollieMale_blockPresentaionResultat.titre, beardedCollieMale_blockPresentaionResultat.juge, beardedCollieMale_blockPresentaionResultat.resultat, beardedCollieMale_blockPresentaionResultat.id FROM beardedCollieMale_nomDuChien, beardedCollieMale_blockPresentaionResultat WHERE beardedCollieMale_nomDuChien.id=beardedCollieMale_blockPresentaionResultat.id_nomDuChien");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo $entres_recu['nom'] ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['titre'],0,30)."..." ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['juge'],0,30)."..." ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['resultat'],0,30)."..." ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionResultat&id=<?php echo $entres_recu['id'] ?>&foreignKey=beardedCollieMale_nomDuChien">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_beardedCollieMale.php&table=beardedCollieMale_blockPresentaionResultat&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['beardedCollieMale_blockPresentaionResultat'])){
              $ajout = $bdd->prepare("INSERT INTO beardedCollieMale_blockPresentaionResultat(titre, juge, resultat, id_nomDuChien) VALUE (?,?,?,?)");
              $foreignKey = $bdd->prepare("SELECT id FROM beardedCollieMale_nomDuChien WHERE nom=?");
              $foreignKey->execute((array($_POST['foreignKey'])));
              $foreignKey_recu = $foreignKey->fetch();
              $ajout->execute(array($_POST['titre'], $_POST['juge'], $_POST['resultat'], $foreignKey_recu['id'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['beardedCollieMale_blockPresentaionResultat'])){
              $modification = $bdd->prepare("UPDATE beardedCollieMale_blockPresentaionResultat SET titre=?, juge=?, resultat=?, id_nomDuChien=? WHERE id=?");
              $foreignKey = $bdd->prepare("SELECT id FROM beardedCollieMale_nomDuChien WHERE nom=?");
              $foreignKey->execute((array($_GET['foreignKey'])));
              $foreignKey_recu = $foreignKey->fetch();
              $modification->execute(array($_GET['titre'], $_GET['juge'], $_GET['resultat'], $foreignKey_recu['id'], $_GET['id'])); 
            }
            ?>
            
          <?php

        }
        else {
            header("location:erreur_connexion.php");
        }

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/admin1.js"> </script>
  </body>
</html>