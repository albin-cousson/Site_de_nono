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

        $connexion = $bdd->query("SELECT pseudo, mot_de_passe FROM admin");
        while ($connexion_recu = $connexion->fetch()){
          if (isset($_POST['pseudo']) && isset($_POST['mot_de_passe'])) {
            if ($_POST['pseudo'] == $connexion_recu["pseudo"] && password_verify($_POST['mot_de_passe'], $connexion_recu["mot_de_passe"])){
              include("header.php");
              ?>

                <div class="row">
                    <div class="col-12 mt-5">
                      <div class="m-auto w-75">
                        <table class="w-100">
                          <caption class="position-relative">
                            <div class="position-absolute"></div>
                            <nav class="navbar p-0">
                              <p class="h1 text-light m-0 position-relative">Messagerie</p>
                            </nav>
                          </caption>
                          <?php
                              ?>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Mail</th>
                                <th>Message</th>
                              <?php
                              ?>
                                <th>Supprimer</th>
                              <?php
                            $entres = $bdd->query("SELECT * FROM messagerie");
                            while($entres_recu = $entres->fetch()){
                              ?>
                                <tr>
                                  <td>
                                    <?php echo $entres_recu['nom']; ?>
                                  </td>
                                  <td>
                                    <?php echo $entres_recu['prenom']; ?>
                                  </td>
                                  <td>
                                    <?php echo substr($entres_recu['mail'],0,30)."..."; ?>
                                  </td>
                                  <td>
                                    <?php echo substr($entres_recu['message'],0,30)."..."; ?>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../messagerie.php&table=messagerie&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
                                  </td>
                                </tr>
                              <?php
                            }
                          ?>
                        </table>
                      </div>
                    </div>
                  </div>

              <?php
            }
            else {
                header("location:erreur_connexion.php");
            }
          }
          elseif (!isset($_POST['pseudo']) && !isset($_POST['mot_de_passe'])) {
            if ($_SESSION['pseudo'] == $connexion_recu['pseudo'] && password_verify($_SESSION['mot_de_passe'], $connexion_recu['mot_de_passe'])){
              include("header.php");
              ?>

                <div class="row">
                    <div class="col-12 mt-5">
                      <div class="m-auto w-75">
                        <table class="w-100">
                          <caption class="position-relative">
                            <div class="position-absolute"></div>
                            <nav class="navbar p-0">
                              <p class="h1 text-light m-0 position-relative">Messagerie</p>
                            </nav>
                          </caption>
                          <?php
                              ?>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Mail</th>
                                <th>Message</th>
                              <?php
                              ?>
                                <th>Supprimer</th>
                              <?php
                            $entres = $bdd->query("SELECT * FROM messagerie");
                            while($entres_recu = $entres->fetch()){
                              ?>
                                <tr>
                                  <td>
                                    <?php echo $entres_recu['nom']; ?>
                                  </td>
                                  <td>
                                    <?php echo $entres_recu['prenom']; ?>
                                  </td>
                                  <td>
                                    <?php echo substr($entres_recu['mail'],0,30)."..."; ?>
                                  </td>
                                  <td>
                                    <?php echo substr($entres_recu['message'],0,30)."..."; ?>
                                  </td>
                                  <td>
                                    <a class="btn btn-outline-danger" href="crud/suppression_carousel_header.php?page=../messagerie.php&table=messagerie&id=<?php echo $entres_recu['id'] ?>">Supprimer</a>
                                  </td>
                                </tr>
                              <?php
                            }
                          ?>
                        </table>
                      </div>
                    </div>
                  </div>

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