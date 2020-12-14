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

          <!--<--<--<--<--<--<--<--<--<--<--<--<-- Article -->
          <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Article</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../blog.php&table=article">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Header</th>
                            <th>Titre</th>
                            <th>Text</th>
                            <th>Rédacteur</th>
                            <th>Image du rédacteur</th>
                            <th>Date</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT header, titre, text, redacteur, image_du_redacteur, date, id FROM article ORDER BY EXTRACT(month FROM date) DESC, EXTRACT(day FROM date) DESC");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['header'],0,15)."..." ?>
                              </td>
                              <td>
                                <?php echo $entres_recu['titre'] ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['text'],0,30)."..."?>
                              </td>
                              <td>
                                <?php echo $entres_recu['redacteur'] ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['image_du_redacteur'],0,15)."..."?>
                              </td>
                              <td>
                                <?php echo $entres_recu['date'] ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../blog.php&table=article&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../blog.php&table=article&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['article'])){
              $ajout = $bdd->prepare("INSERT INTO article(header, titre, text, redacteur, image_du_redacteur, date) VALUE (?,?,?,?,?,?)");
              $ajout->execute(array($_POST['header'], $_POST['titre'], $_POST['text'], $_POST['redacteur'], $_POST['image_du_redacteur'], $_POST['date'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['article'])){
              $modification = $bdd->prepare("UPDATE article SET header=?, titre=?, text=?, redacteur=?, image_du_redacteur=?, date=? WHERE id=?");
              $modification->execute(array($_GET['header'], $_GET['titre'], $_GET['text'], $_GET['redacteur'], $_GET['image_du_redacteur'], $_GET['date'], $_GET['id'])); 
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