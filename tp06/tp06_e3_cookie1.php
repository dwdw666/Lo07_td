<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    setcookie("nom","Wang");
    setcookie("prenom","Taojun");


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="bootstrap.css">
         <link rel="stylesheet" href="tp05.css">
    </head>
    <body>
        <!-- ex3 -->
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">cookie</div>
                <div class="panel-body">
                     <?php
                            if(isset($_COOKIE)){
                                echo "<table>";
                                echo "<tr>";
                                echo "<th>cookie name</th>";
                                echo "<th>cookie value</th>";
                                echo "</tr>";
                                foreach($_COOKIE as $key => $value){
                                    echo "<tr>";
                                    echo "<td>$key</td>";
                                    echo "<td>$value</td>";
                                    echo "</tr>";
                                    
                                    
                                }
                                echo "</table>";
                            }
                      ?>
                   
                    
                    
                </div>
                    
            
            
        </div>
            <div class='panel panel-primary'>
                <div class='panel-heading'>ex3.2</div>
                <div class='panel-body'>le cookie est met par serveur dans le navigateur.le premier fois serveur n'a pas encros mis le cookie</div>
                
            </div>
            <div class='panel panel-primary'>
                <div class='panel-heading'>ex3.3</div>
                <div class='panel-body'>Nouveau cookie sera visible dans les scripts suivants</div>
                
            </div>
    </body>
</html>
