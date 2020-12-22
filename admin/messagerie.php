<?php 
  session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
  <title>Élevage de Saint Prixe - Éspace admin - Messagerie </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec6f517b5c.js" crossorigin="anonymous"></script>
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
                        <th>Voir</th>
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
                            <a class="btn btn-outline-success voir" id="<?php echo $entres_recu['id']; ?>">Voir</a>
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

    ?>

    <div class="pop-up position-absolute flex-column align-items-center p-4">
      <img class="pop-up__close" src="images/cancel.svg" alt=""/>
      <div class="pop-up__group d-flex flex-column align-items-center">
        <p class="pop-up__titre h2">Nom</p>
        <p class="pop-up__contenu lead"></p>
      </div>
      <div class="pop-up__group d-flex flex-column align-items-center">
        <p class="pop-up__titre h2">Prenom</p>
        <p class="pop-up__contenu lead"></p>
      </div>
      <div class="pop-up__group d-flex flex-column align-items-center">
        <p class="pop-up__titre h2">Mail</p>
        <p class="pop-up__contenu lead"></p>
      </div>
      <div class="pop-up__group d-flex flex-column align-items-center">
        <p class="pop-up__titre h2">Message</p>
        <p class="pop-up__contenu lead"></p>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="js/admin1.js"> </script>
</body>
</html>