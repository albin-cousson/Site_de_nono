<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec6f517b5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../header/css/header1.css"/>
    <link rel="stylesheet" href="css/bearded_collie3.css"/>
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
              <svg class="alert_close" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
          </div>
        <?php
        }
    ?>
    
    <div class="container-fluid">

      <div class="row">
        <div class="col-12 p-0">
          <?php 
            $header = $bdd->query("SELECT * FROM chiots_shihTzuMale_header");
            $header_recu = $header->fetch();
          ?>
          <div class="header" style="background-image: url(<?php echo $header_recu['image']; ?>);">
            <p><?php echo $header_recu['titre']; ?></p>
          </div>
        </div>
      </div>
      
      <div class="row mt-3 mb-3 ml-1 mr-1">
        <?php
          $blockPresentation = $bdd->query("SELECT nom FROM chiots_shihTzuMale_nomDuChien");
          while ($blockPresentation_recu = $blockPresentation->fetch()){
        ?>
        <div class="col-12 col-lg-6 p-0">
          <div class="card card__block m-3 text-center">
            <div class="card-header bg-primary text-light display_perso text-uppercase border-bottom border-light">
              <?php echo $blockPresentation_recu['nom']; ?>
            </div>
            <div id="<?php echo $blockPresentation_recu['nom']; ?>" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php
                  $blockPresentation_firstImageSlider = $bdd->prepare("SELECT chiots_shihTzuMale_blockPresentaionSlider.images FROM chiots_shihTzuMale_blockPresentaionSlider, chiots_shihTzuMale_nomDuChien WHERE chiots_shihTzuMale_blockPresentaionSlider.id_nomDuChien=chiots_shihTzuMale_nomDuChien.id AND chiots_shihTzuMale_nomDuChien.nom=? AND chiots_shihTzuMale_blockPresentaionSlider.position=1");
                  $blockPresentation_firstImageSlider->execute(array($blockPresentation_recu['nom']));
                  while ($blockPresentation_firstImageSlider_recu = $blockPresentation_firstImageSlider->fetch()){
                ?>
                  <div class="carousel-item active">
                    <div style="background-image:url(<?php echo $blockPresentation_firstImageSlider_recu['images']; ?>);" class="w-100"></div>
                  </div>
                <?php
                  }
                ?>
                <?php
                  $blockPresentation_slider = $bdd->prepare("SELECT chiots_shihTzuMale_blockPresentaionSlider.images FROM chiots_shihTzuMale_blockPresentaionSlider, chiots_shihTzuMale_nomDuChien WHERE chiots_shihTzuMale_blockPresentaionSlider.id_nomDuChien=chiots_shihTzuMale_nomDuChien.id AND chiots_shihTzuMale_nomDuChien.nom=? AND chiots_shihTzuMale_blockPresentaionSlider.position!=1");
                  $blockPresentation_slider->execute(array($blockPresentation_recu['nom']));
                  while ($blockPresentation_slider_recu = $blockPresentation_slider->fetch()){
                ?>
                  <div class="carousel-item">
                    <div style="background-image:url(<?php echo $blockPresentation_slider_recu['images']; ?>);" class="w-100"></div>
                  </div>
                <?php
                  }
                ?>
              </div>
              <a class="carousel-control-prev" href="#<?php echo $blockPresentation_recu['nom']; ?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#<?php echo $blockPresentation_recu['nom']; ?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <ul class="nav nav-pills d-flex justify-content-center mt-3 pb-3 border-bottom border-primary" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#profile_<?php echo $blockPresentation_recu['nom']; ?>" role="tab" aria-controls="pills-home" aria-selected="true"><svg class="mr-2 pb-1" width="1.5em" height="1.5em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 511.75 511.75" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m120.929 120.986-3.906-9.25c-8.234-20.783-18.062-34.502-40.928-38.172l-21.142 62.354c-6.447 19.014-5.264 39.607 2.691 57.507 15.636-28.316 37.318-53.116 63.285-72.439z" fill="#fff" data-original="#000000" style="" class=""/><path d="m188.647 51.801c-12.739-31.473-42.892-51.801-76.856-51.801h-10.753l-15.22 44.889c35.541 7.703 51.892 37.407 60.705 59.597 17.391-9.596 35.992-16.862 55.253-21.602z" fill="#fff" data-original="#000000" style="" class=""/><path d="m394.727 111.736-.127.311-3.776 8.941c25.962 19.321 47.644 44.118 63.28 72.428 7.959-17.909 9.138-38.493 2.694-57.499l-21.142-62.354c-22.867 3.671-32.695 17.391-40.929 38.173z" fill="#fff" data-original="#000000" style="" class=""/><path d="m410.712 0h-10.753c-33.964 0-64.118 20.33-76.857 51.803l-13.127 31.081c19.26 4.74 37.862 12.006 55.253 21.602 8.813-22.191 25.165-51.895 60.705-59.597z" fill="#fff" data-original="#000000" style="" class=""/><path d="m435.319 223.938c-14.393-29.801-44.732-48.938-77.94-48.938-40.917 0-75.288 28.554-84.24 66.781 6.126 33.957 24.518 64.666 52.531 86.675 4.591 3.606 9.843 7.622 15.608 11.936h.001c34.127 25.535 54.502 66.194 54.502 108.762l-.117 17.53c-.801 9.974-3.404 19.584-7.591 28.437l37.408 16.379 23.11-32.273c17.999-25.135 29.351-54.658 32.828-85.376 3.477-30.719-.989-62.031-12.916-90.553zm-76.584 62.062h-30v-30h30z" fill="#fff" data-original="#000000" style="" class=""/><path d="m86.268 511.501 37.408-16.379c-4.187-8.852-6.791-18.463-7.591-28.437l-.048-1.135-.07-16.331c0-42.632 20.375-83.291 54.503-108.827 5.782-4.326 11.033-8.342 15.607-11.936 28.003-22.001 46.392-52.694 52.525-86.635-8.935-38.247-43.317-66.821-84.248-66.821-33.097 0-63.386 19.043-77.824 48.699l-33.285 79.601c-11.926 28.522-16.392 59.834-12.916 90.553 3.477 30.719 14.829 60.241 32.828 85.376zm96.747-225.501h-30v-30h30z" fill="#fff" data-original="#000000" style="" class=""/><path d="m154.354 145c43.499 0 81.502 23.966 101.513 59.384 20.01-35.418 58.013-59.384 101.512-59.384 5.812 0 11.558.44 17.202 1.285-3.142-2.39-6.355-4.691-9.641-6.89-27.805-18.605-54.964-32.445-109.064-32.445s-81.261 13.84-109.065 32.445c-3.286 2.199-6.499 4.5-9.64 6.89 5.637-.845 11.377-1.285 17.183-1.285z" fill="#fff" data-original="#000000" style="" class=""/><path d="m323.307 364.413c-5.954-4.454-11.395-8.615-16.17-12.366-20.474-16.085-41.929-42.546-51.262-65.522-9.167 23.226-30.789 49.437-51.262 65.522-4.759 3.739-10.199 7.9-16.169 12.367-26.597 19.9-42.476 51.58-42.476 84.742l.067 15.663c1.151 12.723 6.909 24.489 16.249 33.182 9.457 8.802 21.765 13.685 34.657 13.75h.252c16.982 0 32.449-8.74 41.275-23.084l-22.235-13.341c-16.157-9.694-26.193-27.42-26.193-46.262 0-29.748 24.202-53.95 53.95-53.95h23.772c29.748 0 53.95 24.202 53.95 53.95 0 18.842-10.037 36.568-26.194 46.262l-22.233 13.341c8.825 14.343 24.293 23.084 41.275 23.084h.251c12.892-.065 25.2-4.948 34.657-13.75 9.34-8.693 15.097-20.459 16.248-33.182l.066-15.727c-.001-33.1-15.879-64.779-42.475-84.679z" fill="#fff" data-original="#000000" style="" class=""/><path d="m267.761 405.113h-23.772c-13.206 0-23.95 10.744-23.95 23.95 0 8.364 4.455 16.234 11.628 20.537l24.208 14.525 24.207-14.525c7.173-4.303 11.629-12.173 11.629-20.537 0-13.206-10.744-23.95-23.95-23.95z" fill="#fff" data-original="#000000" style="" class=""/></g></g></svg><?php echo $blockPresentation_recu['nom']; ?></a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#resultat_<?php echo $blockPresentation_recu['nom']; ?>" role="tab" aria-controls="pills-profile" aria-selected="false"><svg class="mr-2" width="1.6em" height="1.6em" viewBox="-17 -101 560 560" width="560pt" xmlns="http://www.w3.org/2000/svg"><path d="m462.5-5.582031h-400c-34.511719.011719-62.484375 27.988281-62.5 62.5v233.371093c.015625 34.511719 27.988281 62.492188 62.5 62.5h400c34.511719-.007812 62.484375-27.988281 62.5-62.5v-233.371093c-.015625-34.511719-27.988281-62.488281-62.5-62.5zm-400 25h400c18.003906.046875 33.453125 12.824219 36.875 30.496093l-236.875 132.003907-236.875-132.003907c3.421875-17.671874 18.871094-30.449218 36.875-30.496093zm400 308.25h-400c-20.683594-.0625-37.441406-16.816407-37.5-37.5v-212l231.375 128.996093c1.875 1.03125 3.980469 1.59375 6.125 1.628907 2.152344.023437 4.265625-.539063 6.125-1.628907l231.375-128.996093v212c-.015625 20.703125-16.796875 37.480469-37.5 37.5zm0 0"/></svg>Résèrver</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="profile_<?php echo $blockPresentation_recu['nom']; ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                <?php
                  $blockPresentation_profile = $bdd->prepare("SELECT * FROM chiots_shihTzuMale_blockPresentaionProfile, chiots_shihTzuMale_nomDuChien WHERE chiots_shihTzuMale_blockPresentaionProfile.id_nomDuChien=chiots_shihTzuMale_nomDuChien.id AND chiots_shihTzuMale_nomDuChien.nom=?");
                  $blockPresentation_profile->execute(array($blockPresentation_recu['nom']));
                  while ($blockPresentation_profile_recu = $blockPresentation_profile->fetch()){
                ?>
                  <p class="h4 m-0 p-3">Né le <?php echo $blockPresentation_profile_recu['date_naissance']; ?></p>
                <?php
                  }
                ?>
                <a class="buttonGenealogie btn btn-primary text-light mb-3">Voir la généalogie
                  <svg width=".9em" height=".9em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>  
                </a>
              </div>
              <div class="tab-pane fade" id="resultat_<?php echo $blockPresentation_recu['nom']; ?>" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form action="" method="POST" class="mt-3 mb-3 pl-4 pr-4">
                  <p class="h3 text-dark mb-3">Envoyez-nous un message</p>
                  <div class="form-group">
                    <label for="">Votre nom</label>
                    <input type="text" name="nom" class="form-control lead_perso">
                  </div>
                  <div class="form-group">
                    <label for="">Votre prénom</label>
                    <input type="text" name="prenom" class="form-control lead_perso">
                  </div>
                  <div class="form-group">
                    <label for="">Votre mail</label>
                    <input type="text" name="mail" class="form-control lead_perso">
                  </div>
                  <div class="form-group">
                    <label for="">Votre message</label>
                    <textarea type="text" name="message" class="form-control lead_perso"></textarea>
                  </div>
                  <input type="submit" value="Résèrver" class="btn btn-primary text-light">
                  
                </form>
              </div>
            </div>

            <div class="card-footer border-top border-primary">
                <?php
                  $blockPresentation_prix = $bdd->prepare("SELECT prix FROM chiots_shihTzuMale_prix, chiots_shihTzuMale_nomDuChien WHERE chiots_shihTzuMale_prix.id_nomDuChien=chiots_shihTzuMale_nomDuChien.id AND chiots_shihTzuMale_nomDuChien.nom=?");
                  $blockPresentation_prix->execute(array($blockPresentation_recu['nom']));
                  while ($blockPresentation_prix_recu = $blockPresentation_prix->fetch()){
                ?>
                  <p class="h4 text-primary m-0 p-0"><?php echo $blockPresentation_prix_recu["prix"]; ?>€</p>
                <?php
                  }
                ?>
            </div>

          </div>
        </div>
        <?php
          }
        ?>
      </div>
        
    </div> 

    <?php
        include ("../footer/footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="../header/js/header.js"></script>
    <script src="js/chiots_shih_tzu.js"></script>
  </body>
</html>