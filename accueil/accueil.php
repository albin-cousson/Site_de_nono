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

    ?>

    <!-- CAROUSEL HEADER -->

    <div class="container-fluid">
      
      <div class="row">

        <div class="col-12 col-xl-6 d-none d-xl-block p-0">
          <div id="carousel_header" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <?php 
                $first_carousel_header = $bdd->query("SELECT url_image FROM accueil_image_header WHERE position=1");
                $first_image_carousel_recu = $first_carousel_header->fetch();
              ?>
              <div class="carousel-item active">
                <img src="<?php echo $first_image_carousel_recu['url_image']; ?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
              </div>

              <?php 
                $carousel_header = $bdd->query("SELECT url_image FROM accueil_image_header WHERE position!=1");
                while ($carousel_header_recu = $carousel_header->fetch()){
              ?>

              <div class="carousel-item">
                <img src="<?php echo $carousel_header_recu['url_image']?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
              </div>

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

        <div class="col-12 col-xl-6 d-none d-xl-flex flex-column justify-content-center align-items-center p-0 bg-primary">
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

      <div class="row">
        <div class="col-12 p-0 d-block d-xl-none">
          <img class="p-0" src="<?php echo $image_header_responsive_recu['url_image']?>"alt="..." width="100%">
        </div>
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
      <div class="row">
        <div class="col-12 col-xl-4 p-0">
          <div id="first_carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel__masque w-100 h-100 position-absolute"></div>
            <div class="carousel-inner">

              <?php 
                $first_presentation_bearded = $bdd->query("SELECT nom, url_image FROM accueil_presentation_bearded WHERE position=1");
                $first_presentation_bearded_recu = $first_presentation_bearded->fetch();
              ?>

              <div class="carousel-item active">
                <p class="position-absolute w-75 text-center text-light"><?php echo $first_presentation_bearded_recu['nom']?></p>
                <img src="<?php echo $first_presentation_bearded_recu['url_image']?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
              </div>

              <?php 
                $presentation_bearded = $bdd->query("SELECT nom, url_image FROM accueil_presentation_bearded WHERE position!=1");
                while ($presentation_bearded_recu = $presentation_bearded->fetch()){
              ?>

              <div class="carousel-item">
                <p class="position-absolute w-75 text-center text-light"><?php echo $presentation_bearded_recu['nom']?></p>
                <img src="<?php echo $presentation_bearded_recu['url_image']?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
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

              <div class="carousel-item active">
                <p class="position-absolute w-75 text-center text-light"><?php echo $first_presentation_shihshih_recu['nom']?></p>
                <img src="<?php echo $first_presentation_shihshih_recu['url_image']?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
              </div>

              <?php 
                $presentation_shihshih = $bdd->query("SELECT nom, url_image FROM accueil_presentation_shihshih WHERE position!=1");
                while ($presentation_shihshih_recu = $presentation_shihshih->fetch()){
              ?>
              
              <div class="carousel-item">
                <p class="position-absolute w-75 text-center text-light"><?php echo $presentation_shihshih_recu['nom']?></p>
                <img src="<?php echo $presentation_shihshih_recu['url_image']?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
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

              <div class="carousel-item active">
                <p class="position-absolute w-75 text-center text-light"><?php echo $first_presentation_chiots_recu['nom']?></p>
                <img src="<?php echo $first_presentation_chiots_recu['url_image']?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
              </div>

              <?php 
                $presentation_chiots = $bdd->query("SELECT nom, url_image FROM accueil_presentation_chiots WHERE position!=1");
                while ($presentation_chiots_recu = $presentation_chiots->fetch()){
              ?>

              <div class="carousel-item">
                <p class="position-absolute w-75 text-center text-light"><?php echo $presentation_chiots_recu['nom']?></p>
                <img src="<?php echo $presentation_chiots_recu['url_image']?>" class="d-block w-100" alt="images_de_maginfiques_petits_chiots">
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
          <div class="col-12 col-xl-4 p-0">
              <div class="card h-100">
                <img src="https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title card_title_perso">Card title</h5>
                  <p class="card-text card_text_perso m-0">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <img class="card-body__zigzag" src="images/zigzag.svg" alt="" width="50px"/>
                  <div class="d-flex pb-3 align-items-center">
                    <img class="card-body__redigé_par_nono" src="https://cdn.pixabay.com/photo/2018/05/07/10/48/husky-3380548_960_720.jpg" alt="" width="50px" height="50px"/>
                    <p class="m-0 pl-3 text-muted card_text_perso">Rédigé par Arnaud Cousson </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-outline-primary card_text_perso"> Lire l'article </a>
                    <i class="fab fa-instagram card_icone_perso pl-4"></i>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted card_text_perso">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4 p-0">
              <div class="card h-100">
              <img src="https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title card_title_perso">Card title</h5>
                  <p class="card-text card_text_perso m-0">This card has supporting text below as a natural lead-in to additional content.</p>
                  <img class="card-body__zigzag" src="images/zigzag.svg" alt="" width="50px"/>
                  <div class="d-flex pb-3 align-items-center">
                    <img class="card-body__redigé_par_nono" src="https://cdn.pixabay.com/photo/2018/05/07/10/48/husky-3380548_960_720.jpg" alt="" width="50px" height="50px"/>
                    <p class="m-0 pl-3 text-muted card_text_perso">Rédigé par Arnaud Cousson </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-outline-primary card_text_perso"> Lire l'article </a>
                    <i class="fab fa-instagram card_icone_perso pl-4"></i>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted card_text_perso">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4 p-0">
              <div class="card h-100">
                <img src="https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title card_title_perso">Card title</h5>
                  <p class="card-text card_text_perso m-0">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <img class="card-body__zigzag" src="images/zigzag.svg" alt="" width="50px"/>
                  <div class="d-flex pb-3 align-items-center">
                    <img class="card-body__redigé_par_nono" src="https://cdn.pixabay.com/photo/2018/05/07/10/48/husky-3380548_960_720.jpg" alt="" width="50px" height="50px"/>
                    <p class="m-0 pl-3 text-muted card_text_perso">Rédigé par Arnaud Cousson </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-outline-primary card_text_perso"> Lire l'article </a>
                    <i class="fab fa-instagram card_icone_perso pl-4"></i>
                  </div>
                </div>
              <div class="card-footer">
                <small class="text-muted card_text_perso">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
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