<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec6f517b5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../header/css/header1.css"/>
    <link rel="stylesheet" href="css/accueil7.css"/>
  </head>
  <body>

    <?php 
    
    include ("../bdd.php");
    include ("../header/header.php");
    function transformDateNumberToDateLetter($mois){
      for($i=1;$i<13;$i++){
       if($i == $mois) {
         switch($mois){
          case 1:
            return $mois = "JANVIER";
            break;
          case 2:
            return $mois = "FERVRIER";
            break;
          case 3:
            return $mois = "MARS";
            break;
          case 4:
            return $mois = "AVRIL";
            break;
          case 5:
            return $mois = "MAI";
            break;
          case 6:
            return $mois = "JUIN";
            break;
          case 7:
            return $mois = "JUILLET";
            break;
          case 8:
            return $mois = "AOUT";
            break;
          case 9:
            return $mois = "SEPTEMBRE";
            break;
          case 10:
            return $mois = "OCTOBRE";
            break;
          case 11:
            return $mois = "NOVEMBRE";
            break;
          case 12:
            return $mois = "DECEMBRE";
            break;
         }
       }
      }
    }
    ?>

    <!-- CAROUSEL HEADER -->

    <div class="container-fluid">
      
      <div class="header_pc row d-none d-xl-flex">

        <div class="col-12 col-xl-6 d-none d-xl-block p-0">
          <div id="carousel_header" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <?php 
                $first_carousel_header = $bdd->query("SELECT url_image FROM accueil_image_header WHERE position=1");
                $first_image_carousel_recu = $first_carousel_header->fetch();
              ?>
              <div class="carousel-item active" style="background-image: url(<?php echo $first_image_carousel_recu['url_image']; ?>);"></div>

              <?php 
                $carousel_header = $bdd->query("SELECT url_image FROM accueil_image_header WHERE position!=1");
                while ($carousel_header_recu = $carousel_header->fetch()){
              ?>
              <div class="carousel-item"  style="background-image: url(<?php echo $carousel_header_recu['url_image']; ?>);"></div>
              <?php
                } 
              ?>

            </div>

            <a class="carousel-control-prev" href="#carousel_header" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carousel_header" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <?php 
          $cadre_header = $bdd->query("SELECT titre, text, url_image FROM accueil_cadre_header");
          $cadre_header_recu = $cadre_header->fetch();
        ?>

        <div class="col-12 col-xl-6 d-none d-xl-flex flex-column justify-content-center align-items-center p-4 bg-primary">
          <div cless="cadre_header">
            <h1 class="w-100 p-0 display-4 text-center text-light      cadre_header__title"><?php echo $cadre_header_recu['titre']?></h1>
            <p class="lead w-100 mb-4 p-4 text-center text-light"><?php echo $cadre_header_recu['text']?></p>
            <div class="media d-flex justify-content-center">
              <img class="p-0" src="<?php echo $cadre_header_recu['url_image']?>" class="align-self-center mr-3" alt="..." width="300px">
            </div>
          </div>
        </div>
      </div>

    <!-- images du header pour le responsive  -->
      <?php 
          $image_header_responsive = $bdd->query("SELECT url_image FROM accueil_image_header_responsive");
          $image_header_responsive_recu = $image_header_responsive->fetch();
      ?>

      <div class="row image_header_responsive">
        <div class="col-12 p-0 d-block d-xl-none" style="background-image:url(<?php echo $image_header_responsive_recu['url_image']?>);"></div>
      </div>

    <!-- jumbotron -->
      <?php 
          $jumbotron_presentation = $bdd->query("SELECT titre, text FROM accueil_jumbotron_presentation");
          $jumbotron_presentation_recu = $jumbotron_presentation->fetch();
      ?>

      <div class="row">
        <div class="col-12 p-0">
          <div class="jumbotron jumbotron-fluid m-0 bg-white">
            <div class="container">
              <h1 class="display_perso m-0 text-center"><?php echo $jumbotron_presentation_recu['titre']?></h1>
              <p class="lead_perso mt-3 mb-3 text-center"><?php echo $jumbotron_presentation_recu['text']?></p>
            </div>
            <a href="#first_carousel" class="big_icon_perso text-dark"><i class="fas fa-angle-double-down position-absolute"></i></a>
          </div>
        </div>
      </div>

    <!-- CAROUSEL PRESENTATION CHIENS (EN DESSOUS DU JUMBOTRON) -->
      <div class="row slider_presentation_chien">
        <div class="col-12 col-xl-4 p-0">
          <div id="first_carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel__masque w-100 h-100 position-absolute"></div>
            <div class="carousel-inner">

              <?php 
                $first_presentation_bearded = $bdd->query("SELECT nom, url_image FROM accueil_presentation_bearded WHERE position=1");
                $first_presentation_bearded_recu = $first_presentation_bearded->fetch();
              ?>

              <div class="carousel-item active" style="background-image: url(<?php echo $first_presentation_bearded_recu['url_image']; ?>);">
                <p class="position-absolute w-75 text-center text-light"><?php echo $first_presentation_bearded_recu['nom']?></p>
              </div>

              <?php 
                $presentation_bearded = $bdd->query("SELECT nom, url_image FROM accueil_presentation_bearded WHERE position!=1");
                while ($presentation_bearded_recu = $presentation_bearded->fetch()){
              ?>

              <div class="carousel-item" style="background-image: url(<?php echo $presentation_bearded_recu['url_image']; ?>);">
                <p class="position-absolute w-75 text-center text-light"><?php echo $presentation_bearded_recu['nom']?></p>
              </div>

              <?php
                } 
              ?>

            </div>
            <a class="carousel-control-prev" href="#first_carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#first_carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="col-12 col-xl-4 p-0">
          <div id="second_prentation" class="carousel slide" data-ride="carousel">
            <div class="carousel__masque w-100 h-100 position-absolute"></div>
            <div class="carousel-inner">

              <?php 
                $first_presentation_shihshih = $bdd->query("SELECT nom, url_image FROM accueil_presentation_shihshih WHERE position=1");
                $first_presentation_shihshih_recu = $first_presentation_shihshih->fetch();
              ?>

              <div class="carousel-item active" style="background-image: url(<?php echo $first_presentation_shihshih_recu['url_image']; ?>);">
                <p class="position-absolute w-75 text-center text-light"><?php echo $first_presentation_shihshih_recu['nom']?></p>
              </div>

              <?php 
                $presentation_shihshih = $bdd->query("SELECT nom, url_image FROM accueil_presentation_shihshih WHERE position!=1");
                while ($presentation_shihshih_recu = $presentation_shihshih->fetch()){
              ?>
              
              <div class="carousel-item" style="background-image: url(<?php echo $presentation_shihshih_recu['url_image']; ?>);">
                <p class="position-absolute w-75 text-center text-light"><?php echo $presentation_shihshih_recu['nom']?></p>
              </div>

              <?php
                } 
              ?>

            </div>
            <a class="carousel-control-prev" href="#second_prentation" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#second_prentation" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="col-12 col-xl-4 p-0">
          <div id="third_presentation" class="carousel slide" data-ride="carousel">
            <div class="carousel__masque w-100 h-100 position-absolute"></div>
            <div class="carousel-inner">

              <?php 
                $first_presentation_chiots = $bdd->query("SELECT nom, url_image FROM accueil_presentation_chiots WHERE position=1");
                $first_presentation_chiots_recu = $first_presentation_chiots->fetch();
              ?>

              <div class="carousel-item active" style="background-image: url(<?php echo $first_presentation_chiots_recu['url_image']; ?>);">
                <p class="position-absolute w-75 text-center text-light"><?php echo $first_presentation_chiots_recu['nom']?></p>
              </div>

              <?php 
                $presentation_chiots = $bdd->query("SELECT nom, url_image FROM accueil_presentation_chiots WHERE position!=1");
                while ($presentation_chiots_recu = $presentation_chiots->fetch()){
              ?>

              <div class="carousel-item" style="background-image: url(<?php echo $presentation_chiots_recu['url_image']; ?>);">
                <p class="position-absolute w-75 text-center text-light"><?php echo $presentation_chiots_recu['nom']?></p>
              </div>

              <?php
                } 
              ?>

            </div>
            <a class="carousel-control-prev" href="#third_presentation" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#third_presentation" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- jumbotron -->
    <?php 
      $titre_actualite = $bdd->query("SELECT titre FROM accueil_titre_actualite");
      $titre_actualite_recu = $titre_actualite->fetch();
    ?>

     <div class="row">
        <div class="col-12 p-0">
          <div class="jumbotron jumbotron_actus jumbotron-fluid m-0 bg-white">
            <div class="container d-flex justify-content-center align-items-center">
              <h1 class="display_perso m-0 text-center"><?php echo $titre_actualite_recu['titre']?></h1>
            </div>
          </div>
        </div>
      </div>

    <!-- actus -->
    <div class="row w-100 m-auto">
        <div class="card-group">
          <?php
          $article = $bdd->query("SELECT header, titre, text, redacteur, image_du_redacteur, id, EXTRACT(day FROM date) AS jour, EXTRACT(month FROM date) AS mois, EXTRACT(year FROM date) AS annee FROM article WHERE EXTRACT(month FROM date)>=MONTH(NOW())-1 ORDER BY EXTRACT(month FROM date) DESC, EXTRACT(day FROM date) DESC LIMIT 3");
            while($article_recu = $article->fetch()){
          ?>
          <div class="col-12 col-xl-4 p-0">
            <div class="card h-100">
              <img src="<?php echo $article_recu['header'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title card_title_perso"><?php echo $article_recu['titre'] ?></h5>
                <p class="card-text card_text_perso m-0"><?php echo substr($article_recu['text'], 0, 200)."..." ?></p>
                <img class="card-body__zigzag" src="images/zigzag.svg" alt="" width="50px"/>
                <div class="d-flex pb-4 align-items-center">
                  <img class="card-body__redigé_par_nono" src="<?php echo $article_recu['image_du_redacteur'] ?>" alt="" width="50px" height="50px"/>
                  <p class="m-0 pl-3 text-muted card_text_perso">Rédigé par <?php echo $article_recu['redacteur'] ?> </p>
                </div>
                <div class="d-flex align-items-center">
                  <a class="btn btn-outline-primary card_text_perso" href="../blog/article.php?article=<?php echo $article_recu['id'] ?>"> Lire l'article </a>
                  <i class="fab fa-instagram card_icone_perso pl-4"></i>
                </div>
              </div>
              <div class="card-footer">
                <small class="text-muted card_text_perso"><?php echo $article_recu['jour']." ".transformDateNumberToDateLetter($article_recu['mois'])." ".$article_recu['annee'] ?></small>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
      </div>
    </div>

    <!-- jumbotron -->
     <div class="row">
        <div class="col-12 p-0">
          <div class="jumbotron jumbotron-fluid m-0 bg-white">
            <div class="container d-flex justify-content-center">
              <a type="button" class="btn btn-primary card_text_perso text-light shadow" href="#">Voir plus</a>
            </div>
          </div>
        </div>
      </div>

      <?php 
        $video = $bdd->query("SELECT url_video FROM accueil_video");
        $video_recu = $video->fetch();
      ?>

      <div class="row">
        <div class="col-12 col-xl-10 m-auto     embed">
          <div class="embed-responsive embed-responsive-16by9 w-100 p-5 border border-primary shadow-lg">
            <iframe class="embed-responsive-item" src="<?php echo $video_recu['url_video']?>" allowfullscreen></iframe>
          </div>
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
  </body>
</html>