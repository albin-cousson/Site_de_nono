<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec6f517b5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../header/css/header1.css"/>
    <link rel="stylesheet" href="css/bearded_collieA.css"/>
  </head>
  <body>

    <?php 
        include ("../bdd.php");
        include ("../header/header.php");
    ?>
    
    <div class="container-fluid">

      <div class="row">
        <div class="col-12 p-0">
          <div class="header">
            <p>BEARDED COLLIE</p>
          </div>
        </div>
      </div>

      <div class="row mt-3 mb-3 ml-1 mr-1">
        <div class="col-12 col-lg-6 p-0">
          <div class="card card__block m-3 text-center">
            <div class="card-header bg-primary text-light display_perso border-bottom border-light">
              MARGOT
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img class="mr-1 pb-1" src="./images/dog.svg" alt="" width="24px" height="24px"/>Profile</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img class="mr-1 pb-1" src="./images/trophet.svg" alt="" width="24px" height="24px"/>Résultat</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img class="mr-1 pb-1" src="./images/adn.svg" alt="" width="24px" height="24px"/>Généalogie</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="m-auto">3 ans</p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card" style="width: 100%;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="d-flex">
                  <div class="col-6 p-0">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-6 p-0">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 p-0">
          <div class="card card__block m-3 text-center">
            <div class="card-header bg-primary text-light display_perso border-bottom border-light">
              MARGOT
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link nav-link-profile active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img class="mr-1 pb-1" src="./images/dog.svg" alt="" width="24px" height="24px"/>Profile</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img class="mr-1 pb-1" src="./images/trophet.svg" alt="" width="24px" height="24px"/>Résultat</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img class="mr-1 pb-1" src="./images/adn.svg" alt="" width="24px" height="24px"/>Généalogie</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="m-auto">3 ans</p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card" style="width: 100%;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="d-flex">
                  <div class="col-6">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 p-0">
          <div class="card card__block m-3 text-center">
            <div class="card-header bg-primary text-light display_perso border-bottom border-light">
              MARGOT
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link nav-link-profile active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img class="mr-1 pb-1" src="./images/dog.svg" alt="" width="24px" height="24px"/>Profile</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img class="mr-1 pb-1" src="./images/trophet.svg" alt="" width="24px" height="24px"/>Résultat</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img class="mr-1 pb-1" src="./images/adn.svg" alt="" width="24px" height="24px"/>Généalogie</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="m-auto">3 ans</p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card" style="width: 100%;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="d-flex">
                  <div class="col-6 p-0">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-6 p-0">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 p-0">
          <div class="card card__block m-3 text-center">
            <div class="card-header bg-primary text-light display_perso border-bottom border-light">
              MARGOT
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.pixabay.com/photo/2011/12/14/12/21/orion-nebula-11107_960_720.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link nav-link-profile active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img class="mr-1 pb-1" src="./images/dog.svg" alt="" width="24px" height="24px"/>Profile</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img class="mr-1 pb-1" src="./images/trophet.svg" alt="" width="24px" height="24px"/>Résultat</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img class="mr-1 pb-1" src="./images/adn.svg" alt="" width="24px" height="24px"/>Généalogie</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="m-auto">3 ans</p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card" style="width: 100%;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                    <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="d-flex">
                  <div class="col-6">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Dapibus ac facilisis in <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                        <li class="list-group-item">Vestibulum at eros <footer class="blockquote-footer">Titre obtenue le <cite title="Source Title">30:12:20</cite></footer></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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