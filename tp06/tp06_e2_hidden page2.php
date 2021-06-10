<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="bootstrap.css">
         <link rel="stylesheet" href="tp05.css">
    </head>
    <body>
        <?php
        
        ?>
        
         <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">tpo6_hidden_page2</div>
                <div class="panel-body">
                    
                    <?php 
                          
                          foreach($_GET as $key => $value ){
                              echo "$key";
                                echo "</br>";
                                echo "</br>";
                                echo "$value";
                              echo " <a href=\"lo07_analyse_superglobales.php? ville=$key & effectif=$value \">lo07_analyse_superglobales.php?ville=$key Effectif=$value</a>";
                              
                          }
               
                    
                    ?>
                </div>
                    
            
            
        </div>
    </body>
</html>
