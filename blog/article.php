<!doctype html>
<html lang="fr">
  <head>
    <title>Élevage de Saint Prixe - Article n°<?php echo $_GET['article']; ?></title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec6f517b5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../header/css/header1.css"/>
    <link rel="stylesheet" href="css/article1.css"/>
  </head>
  <body>

    <?php 
        include ("../bdd.php");
        include ("../header/header.php");
        $article = $bdd->prepare("SELECT header, titre, text, redacteur, image_du_redacteur, id, EXTRACT(day FROM date) AS jour, EXTRACT(month FROM date) AS mois, EXTRACT(year FROM date) AS annee FROM article WHERE id=?");
        $article->execute([$_GET['article']]);
        $article_recu = $article->fetch();
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
    
      <div class="col-12 p-0">
        <div class="header" style="background-image: url(<?php echo $article_recu['header']; ?>);">
        <p><?php echo $article_recu['titre']; ?></p>
      </div>
      <div class="col-12 p-0">
        <h1 class="display_perso m-0 pt-4 pb-4 pl-4 pr-4"><?php echo $article_recu['titre']; ?></h1>
        <p class="text-muted m-0 pb-4 pl-4 pr-4"><?php echo $article_recu['jour']." ".transformDateNumberToDateLetter($article_recu['mois'])." ".$article_recu['annee'] ?></p>
        <p class="lead_perso m-0 pb-4 pl-4 pr-4"><?php echo $article_recu['text']; ?></p>
      </div>
      <div class="col-12">
        <div class="redacteur d-flex justify-content-center mb-4">
          <div class="m-0 pl-4 pr-4">
            <img class="redacteur__image" src="<?php echo $article_recu['image_du_redacteur'] ?>" alt="" width="100px" height="100px"/>
          </div>
        </div>
      </div>
      <div class="col-12">
        <p class="h2 text-center m-0 pb-4 pl-4 pr-4"><?php echo $article_recu['redacteur'] ?></p>
      </div>
      <div class="col-12">
        <div class="d-flex justify-content-center pb-4">
          <a href="#"><i class="fab fa-facebook icone_reseau pl-2 pr-2"></i></a>
          <a href="#"><i class="fab fa-instagram icone_reseau pl-2 pr-2"></i></a>
        </div>
      </div>
      <div class="col-12">
        <div class="autre__article d-flex justify-content-center">
          <div class="m-0 pl-4 pr-4">
            <p class="h1 text-center">Autres articles</p>
          </div>
        </div>
      </div>

      <!-- Actus sur pc -->
      <div id="first_article" class="swiper-container d-none d-xl-block pt-4 pb-5">
          <div class="swiper-wrapper">
            <?php
            $article = $bdd->query("SELECT header, titre, text, redacteur, image_du_redacteur, id, EXTRACT(day FROM date) AS jour, EXTRACT(month FROM date) AS mois, EXTRACT(year FROM date) AS annee FROM article ORDER BY EXTRACT(month FROM date) DESC, EXTRACT(day FROM date) DESC");
              while($article_recu = $article->fetch()){
            ?>
            <div class="swiper-slide">
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
                    <a class="btn btn-outline-primary card_text_perso" href="./article.php?article=<?php echo $article_recu['id'] ?>"> Lire l'article </a>
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
          <div class="swiper-pagination"></div>
        </div>
      <!-- Fin des actus sur pc -->

       <!-- Actus sur mobile -->
       <div id="first_article_responsive" class="swiper-container-responsive d-xl-none pt-4 pl-4 pr-4">
        <div class="swiper-wrapper">
          <?php
          $article = $bdd->query("SELECT header, titre, text, redacteur, image_du_redacteur, id, EXTRACT(day FROM date) AS jour, EXTRACT(month FROM date) AS mois, EXTRACT(year FROM date) AS annee FROM article ORDER BY EXTRACT(month FROM date) DESC, EXTRACT(day FROM date) DESC");
            while($article_recu = $article->fetch()){
          ?>
            <div class="swiper-slide">
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
                    <a class="btn btn-outline-primary card_text_perso" href="./article.php?article=<?php echo $article_recu['id'] ?>"> Lire l'article </a>
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
        <div class="swiper-pagination-responsive p-4 d-flex justify-content-center"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <!-- Fin des actus sur mobile -->

    <?php
        include ("../footer/footer.php");
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../header/js/header.js"></script>
    <script src="js/article.js"></script>
  </body>
</html>