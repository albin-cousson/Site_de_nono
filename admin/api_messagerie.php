<?php 

    include("../bdd.php");

    $entres = $bdd->prepare("SELECT * FROM messagerie WHERE id =?");
    $entres->execute([$_GET['id']]);
    $entres_recu = $entres->fetch();

    $response = array($entres_recu['nom'], $entres_recu['prenom'], $entres_recu['mail'], $entres_recu['message']);
    
    $response_encode = json_encode($response);

    echo $response_encode;

?>