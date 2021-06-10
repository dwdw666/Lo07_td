<?php

    require_once'bibliotheque.php';
    $requete_2 = "select * from vin where annee = 1976";
    
    cree_panel("Vin");
    include 'fragmentVinResultats.php';
?>

