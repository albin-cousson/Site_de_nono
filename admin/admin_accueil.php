<?php 
  session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
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

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Carousel header -->
              <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Carousel header</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_image_header">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Url image</th>
                            <th>Position</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT url_image, position, id FROM accueil_image_header");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['url_image'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['position'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_image_header&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_image_header&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_image_header'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_image_header(url_image, position) VALUE (?,?)");
              $ajout->execute(array($_POST['url_image'], $_POST['position'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_image_header'])){
              $modification = $bdd->prepare("UPDATE accueil_image_header SET url_image=?, position=? WHERE id=?");
              $modification->execute(array($_GET['url_image'], $_GET['position'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Cadre header -->
              <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Cadre header</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_cadre_header">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Titre</th>
                            <th>Text</th>
                            <th>Url image</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT titre, text, url_image, id FROM accueil_cadre_header");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['titre'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['text'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['url_image'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_cadre_header&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_cadre_header&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_cadre_header'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_cadre_header(titre, text, url_image) VALUE (?,?,?)");
              $ajout->execute(array($_POST['titre'], $_POST['text'], $_POST['url_image'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_cadre_header'])){
              $modification = $bdd->prepare("UPDATE accueil_cadre_header SET titre=?, text=?, url_image=? WHERE id=?");
              $modification->execute(array($_GET['titre'], $_GET['text'], $_GET['url_image'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Image header responsive -->
            <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Image header responsive</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_image_header_responsive">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Url image</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT url_image, id FROM accueil_image_header_responsive");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['url_image'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_image_header_responsive&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_image_header_responsive&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_image_header_responsive'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_image_header_responsive(url_image) VALUE (?)");
              $ajout->execute(array($_POST['url_image'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_image_header_responsive'])){
              $modification = $bdd->prepare("UPDATE accueil_image_header_responsive SET url_image=? WHERE id=?");
              $modification->execute(array($_GET['url_image'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Jumbotron présentation -->
            <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Jumbotron présentation</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_jumbotron_presentation">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Titre</th>
                            <th>Text</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT titre, text, id FROM accueil_jumbotron_presentation");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['titre'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['text'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_jumbotron_presentation&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_jumbotron_presentation&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_jumbotron_presentation'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_jumbotron_presentation(titre, text) VALUE (?,?)");
              $ajout->execute(array($_POST['titre'], $_POST['text'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_jumbotron_presentation'])){
              $modification = $bdd->prepare("UPDATE accueil_jumbotron_presentation SET titre=?, text=? WHERE id=?");
              $modification->execute(array($_GET['titre'], $_GET['text'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Carousel présentation bearded -->
            <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Carousel présentation bearded</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_bearded">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Nom</th>
                            <th>Url image</th>
                            <th>Position</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT nom, url_image, position, id FROM accueil_presentation_bearded");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['nom'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['url_image'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['position'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_bearded&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_bearded&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_presentation_bearded'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_presentation_bearded(nom, url_image, position) VALUE (?,?,?)");
              $ajout->execute(array($_POST['nom'], $_POST['url_image'], $_POST['position'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_presentation_bearded'])){
              $modification = $bdd->prepare("UPDATE accueil_presentation_bearded SET nom=?, url_image=?, position=? WHERE id=?");
              $modification->execute(array($_GET['nom'], $_GET['url_image'], $_GET['position'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Carousel présentation shih-tzu -->
            <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Carousel présentation shih-tzu</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_shihshih">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Nom</th>
                            <th>Url image</th>
                            <th>Position</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT nom, url_image, position, id FROM accueil_presentation_shihshih");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['nom'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['url_image'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['position'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_shihshih&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_shihshih&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_presentation_shihshih'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_presentation_shihshih(nom, url_image, position) VALUE (?,?,?)");
              $ajout->execute(array($_POST['nom'], $_POST['url_image'], $_POST['position'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_presentation_shihshih'])){
              $modification = $bdd->prepare("UPDATE accueil_presentation_shihshih SET nom=?, url_image=?, position=? WHERE id=?");
              $modification->execute(array($_GET['nom'], $_GET['url_image'], $_GET['position'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Carousel présentation chiots -->
            <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Carousel présentation chiots</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_chiots">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Nom</th>
                            <th>Url image</th>
                            <th>Position</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT nom, url_image, position, id FROM accueil_presentation_chiots");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['nom'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['url_image'],0,30) ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['position'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_chiots&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_presentation_chiots&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_presentation_chiots'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_presentation_chiots(nom, url_image, position) VALUE (?,?,?)");
              $ajout->execute(array($_POST['nom'], $_POST['url_image'], $_POST['position'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_presentation_chiots'])){
              $modification = $bdd->prepare("UPDATE accueil_presentation_chiots SET nom=?, url_image=?, position=? WHERE id=?");
              $modification->execute(array($_GET['nom'], $_GET['url_image'], $_GET['position'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Titre actualités -->
            <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Titre actualités</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_titre_actualite">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Titre</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT titre, id FROM accueil_titre_actualite");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['titre'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_titre_actualite&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_titre_actualite&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_titre_actualite'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_titre_actualite(titre) VALUE (?)");
              $ajout->execute(array($_POST['titre'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_titre_actualite'])){
              $modification = $bdd->prepare("UPDATE accueil_titre_actualite SET titre=? WHERE id=?");
              $modification->execute(array($_GET['titre'], $_GET['id'])); 
            }
            ?>

            <!--<--<--<--<--<--<--<--<--<--<--<--<-- Vidéo -->
            <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Vidéo</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../admin_accueil.php&table=accueil_video">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Url video</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT url_video, id FROM accueil_video");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['url_video'],0,30) ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../admin_accueil.php&table=accueil_video&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../admin_accueil.php&table=accueil_video&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['accueil_video'])){
              $ajout = $bdd->prepare("INSERT INTO accueil_video(url_video) VALUE (?)");
              $ajout->execute(array($_POST['url_video'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['accueil_video'])){
              $modification = $bdd->prepare("UPDATE accueil_video SET url_video=? WHERE id=?");
              $modification->execute(array($_GET['url_video'], $_GET['id'])); 
            }
            ?>

            </div>

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