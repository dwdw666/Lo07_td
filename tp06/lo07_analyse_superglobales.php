<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();

?>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="tp05.css">
    </head>
    <body>
        <div class='container'>
            
            <div class='panel panel-success'>
                <div class='panel-heading'>supergloble get</div>
                <div class='panel-body'>
                    <table>
                        <tr>
                            <th>name</th>
                            <th>value</th>
                            
                        </tr>
                        <?php
                            if(isset($_GET['ville'])){
                                 echo "<tr>
                                       <td>ville</td>
                                       <td>$_GET[ville]</td>
                                       </tr>";
                                 echo "<tr>
                                       <td>effctif</td>
                                      <td>$_GET[effectif]</td>
                                      </tr>";
                                
                            }
                            
                                                  
                        ?>
                        
                        
                    </table>
                   
                    
                </div>
            </div>
            <div class='panel panel-success'>
                <div class='panel-heading'>supergloble cookie</div>
                <div class='panel-body'>
                    <table>
                        <tr>
                            <th>name</th>
                            <th>value</th>
                            
                        </tr>
                        <?php
                            
                             if(isset($_COOKIE['nom'])){
                                 echo "<tr>
                                       <td>nom</td>
                                       <td>$_COOKIE[nom]</td>
                                       </tr>";
                                  echo "<tr>
                                       <td>prenom</td>
                                       <td>$_COOKIE[prenom]</td>
                                       </tr>";
                                 
                                 
                             }                   
                                                  
                        ?>
                        
                        
                    </table>
                   
                    
                </div>
            </div>
                        <div class='panel panel-success'>
                <div class='panel-heading'>supergloble session</div>
                <div class='panel-body'>
                    <table>
                        <tr>
                            <th>name</th>
                            <th>value</th>
                            
                        </tr>
                        <?php
                            
                             if(isset($_SESSION['nom_prenom'])){
                                 echo "<tr>
                                       <td>nom</td>
                                       <td>$_SESSION[nom_prenom]</td>
                                       </tr>";
                                  echo "<tr>
                                       <td>prenom</td>
                                       <td>$_SESSION[module]</td>
                                       </tr>";
                                 
                                 
                             }                   
                                                  
                        ?>
                        
                        
                    </table>
                   
                    
                </div>
            </div>
            
        </div>
        
    </body>
</html>
