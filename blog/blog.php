<!doctype html>
<html lang="fr">
  <head>
    <title>Élevage de Saint Prixe - Actualités</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec6f517b5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../header/css/header1.css"/>
    <link rel="stylesheet" href="css/blog4.css"/>
    <link rel="stylesheet" href="../package/swiper-bundle.min.css">
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
    
    <div class="container-fluid p-0">

      <div class="row">
        <div class="col-12 p-0">
          <div class="header" style="background-image: url(https://cdn.pixabay.com/photo/2016/11/08/05/26/woman-1807533_960_720.jpg);">
            <p>Blog</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 p-0">
          <div class="jumbotron jumbotron-fluid m-0 border-bottom border-top border-primary">
            <div class="container">
              <h1 class="display_perso m-0 text-center">Nos dernières actus</h1>
            </div>
            <a href="#first_article" class="d-none d-xl-block big_icon_perso text-dark"><i class="fas fa-angle-double-down position-absolute"></i></a>
            <a href="#first_article_responsive" class="d-xl-none big_icon_perso text-dark"><i class="fas fa-angle-double-down position-absolute"></i></a>
          </div>
        </div>
      </div>

      <!-- Actus sur pc -->
        <div id="first_article" class="swiper-container d-none d-xl-block pt-5 pb-5">
          <div class="swiper-wrapper">
            <?php
            $article = $bdd->query("SELECT header, titre, text, redacteur, image_du_redacteur, id, EXTRACT(day FROM date) AS jour, EXTRACT(month FROM date) AS mois, EXTRACT(year FROM date) AS annee FROM article WHERE EXTRACT(month FROM date)>=MONTH(NOW())-1 ORDER BY EXTRACT(month FROM date) DESC, EXTRACT(day FROM date) DESC");
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
      <div id="first_article_responsive" class="swiper-container-responsive d-xl-none pt-5 pl-3 pr-3">
        <div class="swiper-wrapper">
          <?php
          $article = $bdd->query("SELECT header, titre, text, redacteur, image_du_redacteur, id, EXTRACT(day FROM date) AS jour, EXTRACT(month FROM date) AS mois, EXTRACT(year FROM date) AS annee FROM article WHERE EXTRACT(month FROM date)>=MONTH(NOW())-1 ORDER BY EXTRACT(month FROM date) DESC, EXTRACT(day FROM date) DESC");
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

        <div class="row pb-5">
          <div class="col-12 p-0">
            <div class="jumbotron jumbotron-fluid m-0 border-bottom border-top border-primary">
              <div class="container">
                <h1 class="display_perso m-0 text-center">Nos dernières actus</h1>
              </div>
              <a href="#second_article" class="big_icon_perso text-dark"><i class="fas fa-angle-double-down position-absolute"></i></a>
            </div>
          </div>
        </div>

        <div id="second_article" class="card-group pl-3 pr-3 justify-content-center">
          <?php
          $count_article = $bdd->query("SELECT COUNT(id) AS article FROM article WHERE EXTRACT(month FROM date)<MONTH(NOW())-1");
          $count_article_recu = $count_article->fetch();
          $nmb_article = $count_article_recu['article'];
          $per_pages_article = 6;
          $nmb_pages_article = CEIL($nmb_article / $per_pages_article);
          if (isset($_GET['article']) && $_GET['article'] > 0 && $_GET['article'] <= $nmb_pages_article){
              $cur_pages_article = $_GET['article'];
          }
          else {
              $cur_pages_article = 1;
          }

          $article = $bdd->query("SELECT header, titre, text, redacteur, image_du_redacteur, id, EXTRACT(day FROM date) AS jour, EXTRACT(month FROM date) AS mois, EXTRACT(year FROM date) AS annee FROM article WHERE EXTRACT(month FROM date)<MONTH(NOW())-1 ORDER BY EXTRACT(month FROM date) DESC, EXTRACT(day FROM date) DESC LIMIT ".(($cur_pages_article-1)*$per_pages_article).",$per_pages_article");
            while($article_recu = $article->fetch()){
          ?>
            <div class="col-12 col-xl-4 pb-5">
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

        <?php
        if (isset($_GET['article'])){
          if ($_GET['article']<=1){
            $prev = 1;
          } else {
            $prev = $_GET['article'] -1;
          }
          if ($_GET['article']>($nmb_pages_article -1)){
            $next = 1;
          } else {
            $next = $_GET['article'] +1;
          }
        }
        ?>
        <nav aria-label="Page navigation example" class="navigation d-flex justify-content-center mb-5">
          <ul class="pagination m-0">
            <li class="page-item">
              <a class="page-link" href="?article=<?php echo $prev ?>&second_article=true" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <?php
              for ($i=1; $i<=$nmb_pages_article; $i++){
                echo "<li class='page-item'><a class='page-link' href='?article=$i&second_article=true'>$i</a></li>";
            }
            ?>
            <li class="page-item">
              <a class="page-link" href="?article=<?php echo $next ?>&second_article=true" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
      
    </div>

    <?php
        include ("../footer/footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../header/js/header.js"></script>
    <script src="js/blog1.js"></script>

  </body>
</html>