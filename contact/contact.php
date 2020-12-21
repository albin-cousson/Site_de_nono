<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec6f517b5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../header/css/header1.css"/>
    <link rel="stylesheet" href="css/contact.css"/>
  </head>
  <body>

    <?php 
        include ("../bdd.php");
        include ("../header/header.php");

        if (isset($_POST['nom'])){
            $ajoutMessage = $bdd->prepare("INSERT INTO messagerie(nom, prenom, mail, message) VALUES (?,?,?,?)");
            $ajoutMessage->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['message']));
            ?>
                <div class="alert alert-success alert-dismissible fade show position-absolute w-100" role="alert">
                    <div><strong>Merci pour votre message !</strong> Vous recevrez une réponse dans moins de 24h.</div>
                    <svg type="button" class="alert_close" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            <?php
        }
    ?>

    <div class="container-fluid">
        <div class="row">
            <?php
                $image = $bdd->query("SELECT image FROM contact");
                $image_recu = $image->fetch();
            ?>
            <div class="image col-12 col-lg-4 d-none d-lg-block p-0" style="background-image: url(<?php echo $image_recu['image']; ?>);"></div>
            <?php
                $imageResponsive = $bdd->query("SELECT image_responsive FROM contact");
                $imageResponsive_recu = $imageResponsive->fetch();
            ?>
            <div class="image-responsive col-12 col-lg-4 d-block d-lg-none p-0" style="background-image: url(<?php echo $imageResponsive_recu['image_responsive']; ?>);"></div>
            <div class="col-12 col-lg-8 p-0">
                <form action="" method="POST" class="p-4 m-4 border border-primary shadow-lg">
                    <div class="form-group">
                        <label class="lead_perso w-100" for="">Votre nom</label>
                        <input type="text" name="nom" class="form-control lead_perso">
                    </div>
                    <div class="form-group">
                        <label class="lead_perso w-100" for="">Votre prénom</label>
                        <input type="text" name="prenom" class="form-control lead_perso">
                    </div>
                    <div class="form-group">
                        <label class="lead_perso w-100" for="">Votre mail</label>
                        <input type="email" name="mail" class="form-control lead_perso">
                    </div>
                    <div class="form-group">
                        <label class="lead_perso w-100" for="">Votre message</label>
                        <textarea type="text" name="message" class="form-control lead_perso"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary d-flex text-light card_text_perso">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        include ("../footer/footer.php");
    ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../header/js/header.js"></script>
    <script src="js/contact.js"></script>
  </body>
</html>