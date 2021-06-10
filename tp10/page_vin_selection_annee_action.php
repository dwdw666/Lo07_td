<?php 
    include 'fragmenHeader.html'; 
    require 'bibliotheque.php';
    $annee = $_GET['selec'];
?>

<body>
    <div class="container">
        <?php 
            include 'fragmentDatabaseConfig.php';
            $requete = "select * from vin where annee = ?";
            $select = $database->prepare($requete);
            $select->execute([$annee]);
            
            cree_panel("annee selecte");
            echo ("<div class='panel panel-body'>");
            print ("<table> 
                                    <tr>
                                        <th>id</th>
                                        <th>cru</th>
                                        <th>degre</th>
                                     </tr>");
            while ($tuple = $select->fetch()){
                  print(" <tr>
                                        <td>$tuple[id]</td>
                                        <td>$tuple[cru]</td>
                                        <td>$tuple[degre]</td>
                                     </tr>");
            }
            print("</table>");
            
            echo("</div>");
            echo("</div>");
            include 'fragmentFooter.html';
            
        ?>
