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
        // put your code here
        ?>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">SUPERGLOBLE GET</div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th>name</th>
                            <th>valeur</th>
                        </tr>
                        <tr>
                            <td>jourlabel</td>
                            <td><?php echo $_GET['jourlabel'];?></td>
                        </tr>
                        <tr>
                            <td>jourIndice</td>
                            <td><?php echo $_GET['jourIndice'];?></td>
                        </tr>
                        <tr>
                            <td>mois</td>
                            <td><?php echo $_GET['mois'];?></td>
                        </tr>
                        <tr>
                            <td>seance</td>
                            <td><?php 
                                foreach($_GET['seance'] as $i){
                                    echo("$i ");
                                }
                            ?></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            
            
        </div>
    </body>
</html>
