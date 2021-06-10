<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="tp04.css">
        <title>resultat</title>
    </head>
    <body>
       <div class="container">
        
        <div class="panel panel-success">
            <div class="panel-heading">superglobal_GET</div>
            <div class='panel-body'>
                <table>
                    <tr>
                        <th>name</th>
                        <th>valuer</th>
                    </tr>
                  
                    <?php
                         foreach($_GET  as $key => $value){
                           echo "<tr>
                                      <td>$key</td>
                                      <td>$value</td>
                                </tr>";
                         }
                         foreach($_post  as $key => $value){
                           echo "<tr>
                                      <td>$key</td>
                                      <td>$value</td>
                                </tr>";
                         }
                    
                    
                    
                    
                    ?>
                </table>
            </div>
        </div>
        
        <div class="panel panel-success">
            <div class="panel-heading">superglobal_POST</div>
            <div class='panel-body'>
                <table>
                    <tr>
                        <th>name</th>
                        <th>valuer</th>
                    </tr>
                  
                    <?php
                         foreach($_POST as $key => $value){
                           echo "<tr>
                                      <td>$key</td>
                                      <td>$value</td>
                                </tr>";
                         }
                    
                    
                    
                    
                    ?>
                </table>
            </div>
        </div>
        <?php 
            printf("<a href='http://localhost/lo07_tp/tp06/lo07_analyse_superglobales.php?get=$_GET&post=$_POST'>transfor</a>");
        
        ?>
       </div>
    </body>
    
</html>
