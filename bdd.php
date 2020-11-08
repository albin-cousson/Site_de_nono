<?php

    try {
        $bdd = new PDO("mysql:host=localhost;dbname=site_de_nono", 'root', 'root');
    }
    catch (Exception $e){
        die("Erreur: " . $e->getMessage());
    }

?>