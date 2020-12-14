<?php 
  if(isset($_POST['pseudo']) && isset($_POST['mot_de_passe'])) {
    session_start();
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['mot_de_passe'] = $_POST['mot_de_passe'];
    header("location:admin_accueil.php");
  }
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/admin_connexion.css"/>
  </head>
  <body>

    <div class="alert alert-danger alert-dismissible fade show position-fixed w-100" role="alert">
        UNE ERREUR EST SURVENUE, <strong>RECONNECTE TOI.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div> 

    <nav class="navbar bg-dark text-light"> <h3 class="w-100 m-0 text-center">BIENVENUE SUR TON ESPACE ADMINISTRATION NONO ! </h3></nav>

    <form class="d-flex flex-column justify-content-center align-items-center position-absolute bg-dark" method="post" action="">
        <div class="form-group d-flex flex-column justify-content-center align-items-center w-100">
            <label class="h5 text-light">Pseudo</label>
            <input type="text" name="pseudo">
            <small class="form-text text-muted">Attention on aime pas les intrus ici !</small>
        </div>
        <div class="form-group d-flex flex-column justify-content-center align-items-center w-100">
            <label class="h5 text-light">Mot de passe</label>
            <input type="password" name="mot_de_passe">
        </div>
        <button type="submit" class="btn btn-light h5 text-dark">Connexion</button>
    </form>    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>