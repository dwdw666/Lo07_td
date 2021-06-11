
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    echo ($results->rowCount()>0) ? 'supprimés'.$results->rowCount().' enregistrements' : "Aucun enregistrement n'est supprimé, veuillez sélectionner un élément qui n'est pas dans rpcolte";
    
//    if ($results) {
//     echo ("<h3>Le vin a été supprime $results</h3>");
//
//    } else {
//     echo ("<h3>Problème d'supprimer du Vin</h3>");
//    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    