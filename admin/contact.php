<?php 
  session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
  <title>Élevage de Saint Prixe - Éspace admin - Contact </title>
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

          <!--<--<--<--<--<--<--<--<--<--<--<--<-- Image -->
          <div class="row">
                <div class="col-12 mt-5">
                  <div class="m-auto w-75">
                    <table class="w-100">
                      <caption class="position-relative">
                        <div class="position-absolute"></div>
                        <nav class="navbar p-0">
                          <p class="h1 text-light m-0 position-relative">Images</p>
                          <a class="btn btn-outline-light position-relative" href="crud/ajout_carousel_header.php?page=../contact.php&table=contact">Ajouter</a>
                        </nav>
                      </caption>
                      <?php
                          ?>
                            <th>Image</th>
                            <th>Image responsive</th>
                          <?php
                          ?>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                          <?php
                        $entres = $bdd->query("SELECT image, image_responsive, id FROM contact");
                        while($entres_recu = $entres->fetch()){
                          ?>
                            <tr>
                              <td>
                                <?php echo substr($entres_recu['image'],0,30)."..." ?>
                              </td>
                              <td>
                                <?php echo substr($entres_recu['image_responsive'],0,30)."..." ?>
                              </td>
                              <td>
                                <a class="btn btn-outline-success" href="crud/modification_carousel_header.php?page=../contact.php&table=contact&id=<?php echo $entres_recu['id'] ?>">Modifier</a>
                              </td>
                              <td>
                                <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../contact.php&table=contact&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
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
            if (isset($_POST['contact'])){
              $ajout = $bdd->prepare("INSERT INTO contact(image, image_responsive) VALUE (?,?)");
              $ajout->execute(array($_POST['image'], $_POST['image_responsive'])); 
            }
            ?>

            <!-- Modification -->
            <?php
            if (isset($_GET['contact'])){
              $modification = $bdd->prepare("UPDATE contact SET image=?, image_responsive=? WHERE id=?");
              $modification->execute(array($_GET['image'], $_GET['image_responsive'], $_GET['id'])); 
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