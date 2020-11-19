<?php

setcookie('pseudo', $_POST['pseudo'], time() + -1);
setcookie('mot_de_passe', $_POST['mot_de_passe'], time() + -1);

header('location:connexion.php');