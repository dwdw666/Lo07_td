<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require ('lo07_biblio_formulaire_bt.php');
require ('lo07_biblio_planning.php');



?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="tp05.css">
        <title>info</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
         <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">info</div>
                <div class="panel-body">
                    
                    <?php 
                           form_begin('Lo07', 'get', 'tp05_tournoi_action.php');
                           $num=$_GET['number'];
                           for ($i=1;$i<=$num;$i++){
                               form_input_text('nom'.$i, 'nom[]', 10,'wang');
                               form_input_text('prenom'.$i, 'prenom[]', 10,'taojun');
                               form_input_text('email'.$i, 'email[]', 10, 'xxxx@xxxx');
                           }
                           form_input_submit('envoyer');
                           form_end();
                    
                    ?>
                </div>
                    
            
            
        </div>
    </body>
</html>
