<?php 
    include 'fragmenHeader.html'; 
    require 'bibliotheque.php';
    include 'fragmentDatabaseConfig.php';
    $cru= $_GET['cru'];
    $annee= $_GET['annee'];
    $degre= $_GET['degre'];
 
 
    $requete = "insert into vin values (?,?,?,?)";
    $requete_2 = "select id, cru from vin where id = ?";
    $requete_3 = "select id from vin";
    
    $statment = $database->query($requete_3);
    while($tuple=$statment->fetch()){
        $id_max = $tuple['id'];
    }
    $id=$id_max+1;
?>

<body>
    <div class="container">
        <?php 
            
           
            $statment = $database->prepare($requete);
            $statment->execute([$id,$cru,$annee,$degre]);
            
            cree_panel("annee selecte");
            echo ("<div class='panel panel-body'>");
            $statment = $database->prepare($requete_2);
            $statment->execute([$id]);
            print ("<table> 
                                    <tr>
                                        <th>id</th>
                                        <th>cru</th>
                                     </tr>");
                        while($tuple=$statment->fetch()){
                          
                            print(" <tr>
                                        <td>$tuple[id]</td>
                                        <td>$tuple[cru]</td>
                                     </tr>");
                           
                            
                            
                        }
            print("</table>");
            echo("</div>");
            echo("</div>");
            include 'fragmentFooter.html';
            
        ?>
