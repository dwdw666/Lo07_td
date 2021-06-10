<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'lo07_biblio_formulaire_bt.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
         <link href="bootstrap.css" rel="stylesheet"/>
          <link rel="stylesheet" href="tp05.css">
        <title>info action</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">ENTER NUMBER</div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th>name</th>
                            <th>valeur</th>
                        </tr>
                        <?php   
                                $nom=$_GET['nom'];
                                $prenom=$_GET['prenom'];
                                $email=$_GET['email'];
                                
                                $number=count($nom);
                                for($i=0;$i<$number;$i++){
                                    echo("<tr>");
                                    echo("<td>nom$i</td>");
                                    echo("<td>$nom[$i]</td>");
                                    echo("</tr>");
                                    echo("<tr>");
                                    echo("<td>prenom$i</td>");
                                    echo("<td>$prenom[$i]</td>");
                                    echo("</tr>");
                                    echo("<tr>");
                                    echo("<td>eamil$i</td>");
                                    echo("<td>$email[$i]</td>");
                                    echo("</tr>");
                                }
                        
                            
                        
                        ?>
                    </table>
                    
                </div>
            </div>

        </div>
    </body>
</html>
