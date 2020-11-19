<?php

    try {
        $bdd = new PDO("mysql:host=localhost;dbname=site_de_nono", 'albin', '03120222');
    }
    catch (Exception $e){
        die("Erreur: " . $e->getMessage());
    }

?>  