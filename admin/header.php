<!--<--<--<--<--<--<--<--<--<--<--<--<-- Navbar -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <nav class="navbar navbar-dark d-flex justify-content-between align-items-center bg-dark p-3">
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item">
            <a class="nav-link mr-3" href="./admin_accueil.php">
              Accueil
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Bearded collie
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./admin_beardedCollieMale.php">Mâle</a>
              <a class="dropdown-item" href="./admin_beardedCollieFemelle.php">Femelle</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Shih-tzu
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./admin_shihTzuMale.php">Mâle</a>
              <a class="dropdown-item" href="./admin_shihTzuFemelle.php">Femelle</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Chiots bearded collie
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./admin_ChiotsbeardedCollieMale.php">Mâle</a>
              <a class="dropdown-item" href="./admin_ChiotsbeardedCollieFemelle.php">Femelle</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Chiots shih-tzu
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./admin_ChiotsshihTzuMale.php">Mâle</a>
              <a class="dropdown-item" href="./admin_ChiotsshihTzuFemelle.php">Femelle</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3" href="./blog.php">
              Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3" href="./contact.php">
              Contact
            </a>
          </li>
        </ul>
        <div>
          <a class="btn btn-light btn__messagerie ml-3" href="messagerie.php">
            Messagerie
            <?php 
              include("../bdd.php");
              $message_enn_attente = $bdd->query("SELECT COUNT(vue) AS vue FROM messagerie WHERE vue=1");
              $message_enn_attente_recu = $message_enn_attente->fetch();
              if($message_enn_attente_recu['vue'] > 0) {
                ?> <div><?php echo $message_enn_attente_recu["vue"]; ?></div> <?php
              }
            ?>
          </a>
          <a class="btn btn-light ml-3" href="deconexion.php">
            Deconexion
          </a>
        </div>
      </nav>
    </div>
  </div>
