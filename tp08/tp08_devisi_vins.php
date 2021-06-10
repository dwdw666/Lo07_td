<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php  
 
    //configuration de sql
    $dsn = 'mysql:dbname=wangtaoj;host=localhost;charset=utf8';
    $username = 'wangtaoj';
    $password = 'HmZOj8XD';
    $option = array();
    
    $requete_1 = "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)";
    $requete_2 = "select * from vin where annee = 1976";
    $requete_3 = "select id, cru from vin where annee = 1976";
    $requete_4 = "select cru, annee from vin where annee = ?";
    $requete_5= "select * from vin where annee = :an and degre = :dg";
    $requete_erreur = "select * from vinXYZ";

    try{
        $database = new PDO($dsn, $username, $password,$option);
        print("ss");
    } catch(PDOException $e){
        printf("%s - %s<p />\n", $e->getCode(), $e->getMessage());
    }
        
    
    

    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">conextion a ma base de dev-isi</div>
                <div class="panel panel-body">
                    <?php 
                        echo("desn=$dsn <br/>");
                        echo("username=$username");
                    ?>
                </div>
                
            </div>
            <div class="panel panel-primary">
                <div class="panel panel-heading"><?php echo("$requete_1");?></div>
                <div class="panel panel-body">
                    <?php 
                        $resault = $database->exec($requete_1);
                        if ($resault === false){
                            print("Nombre tuple ajoute = 0");
                        }
                        else{
                            print("Nombre tuple ajoute=$resault");
                        }
                       
                        
                    ?>
                </div>
                
            </div>
            
            <div class="panel panel-primary">
                <div class="panel panel-heading"><?php echo("$requete_2");?></div>
                <div class="panel panel-body">
                    <?php 
                        $resulta = $database->query($requete_2);
                        $i=0;
                        while($tuple=$resulta->fetch()){
                            print ($i=$i+1);
                            printf("vin(%d,%s,%d, %.2f)<br />", $tuple['id'],$tuple['cru'], $tuple['annee'], $tuple['degre']);
                            
                            
                        }
                        
                       
                        
                    ?>
                </div>
                
            </div>
            
            <div class="panel panel-primary">
                <div class="panel panel-heading"><?php echo("$requete_2");?></div>
                <div class="panel panel-body">
                    <?php 
                        $resulta = $database->query($requete_2);
                        $i=0;
                        print ("<table> 
                                    <tr>
                                        <th>id</th>
                                        <th>cru</th>
                                        <th>annee</th>
                                        <th>degre</th>
                                     </tr>");
                        while($tuple=$resulta->fetch()){
                          
                            print(" <tr>
                                        <td>$tuple[id]</td>
                                        <td>$tuple[cru]</td>
                                        <td>$tuple[annee]</td>
                                        <td>$tuple[degre]</td>
                                     </tr>");
                           
                            
                            
                        }
                        print("</table>");
                       
                        
                    ?>
                </div>
                
            </div>
            
            <div class="panel panel-primary">
                <div class="panel panel-heading"><?php echo("$requete_3");?></div>
                <div class="panel panel-body">
                    <?php 
                        $select = $database->query($requete_3);
                        $total_column = $select->columnCount();
                        
                        for ($counter = 0; $counter < $total_column; $counter ++) {
                             $meta = $select->getColumnMeta($counter);
                             $column[] = $meta['name'];
                             
                             
                        }
                        
                        print ("<table>
                                    <tr>");

                            foreach ($column as $attribut){
                                print("<th>$attribut</th>");

                        }

                        print("</tr>");
                                        
                        while($tuple=$select->fetch()){
                          
                            print(" <tr>");
                            foreach ($column as $attribut){
                                print("<td>$tuple[$attribut]</td>");
                            }
                            print("</tr>");

                        }
                        print("</table>");
                        
                    ?>
                </div>
            </div>
                
                <div class="panel panel-primary">
                    <div class="panel panel-heading"><?php echo("$requete_4");?></div>
                    <div class="panel panel-body">
                    <?php 
                        $select = $database->prepare($requete_4);
                        $select->execute([1980]);

                        print ("<table>
                                    <tr>
                                        <th>cru</th>
                                        <th>annee</th>
    ``                          ");
                        print("</tr>");
                                        
                        while($tuple=$select->fetch()){
                          
                            print(" <tr>");
                            
                                print("<td>$tuple[cru]</td>");
                                print("<td>$tuple[annee]</td>");
                            
                            print("</tr>");

                        }
                        print("</table>");
                        
                    ?>
                    </div>
                </div>    
                <div class="panel panel-primary">
                    <div class="panel panel-heading"><?php echo("$requete_5");?></div>
                    <div class="panel panel-body">
                    <?php 
                        $select = $database->prepare($requete_5);
                        $select->execute ( [ 'an' => 1980,
                                             'dg' => 10.00
                                                ] );


                        print ("<table>
                                    <tr>
                                        <th>cru</th>
                                        <th>annee</th>
    ``                          ");
                        print("</tr>");
                                        
                        while($tuple=$select->fetch()){
                          
                            print(" <tr>");
                            
                                print("<td>$tuple[cru]</td>");
                                print("<td>$tuple[annee]</td>");
                            
                            print("</tr>");

                        }
                        print("</table>");
                        
                    ?>
                </div>
            </div>
            
            <div class="panel panel-primary">
                    <div class="panel panel-heading">Gestion erreur</div>
                    <div class="panel panel-body">
                    <?php 
                        try{
                          $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                          $database->query($requete_erreur);
                            
                        } catch (PDOException $e){
                            print($e->getCode());
                            print($e->getMessage());
                        }
                        
                    ?>
                </div>
            </div>
            <div class="panel panel-primary">
                    <div class="panel panel-heading">Gestion  transactions</div>
                    <div class="panel panel-body">
                    <?php 
                        try{
                          $base = new PDO($dsn, $username, $password,$option);
                          $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                          
                          $base->beginTransaction();
                          
                          $requete_6="insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45)";
                          
                          $base->exec($requete_6);
                          $base->exec($requete_6);
                          $base->commit();
                            
                        } catch (PDOException $e){
                            $base->rollBack();
                            print($e->getCode());
                            print($e->getMessage());
                        
                            
                        }
                        
                    ?>
                </div>
            </div>
        
        
        </div>
        
    </body>
</html>
