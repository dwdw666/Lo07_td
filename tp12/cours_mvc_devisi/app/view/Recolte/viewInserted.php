
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
    if ($results == "insert") {
     echo ("<h3>Le nouveau Recolte a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>producteur_id = " . $_GET['producteur_id'] . "</li>");
     echo ("<li>vin_id = " . $_GET['vin_id'] . "</li>");
     echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3>Le Recolte a été mis a jour </h3>");
     echo("<ul>");
     echo ("<li>producteur_id = " . $_GET['producteur_id'] . "</li>");
     echo ("<li>vin_id = " . $_GET['vin_id'] . "</li>");
     echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
     echo("</ul>");
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    