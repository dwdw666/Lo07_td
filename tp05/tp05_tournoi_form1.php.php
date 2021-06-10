<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require ('lo07_biblio_formulaire_bt.php');
require ('lo07_biblio_planning.php');
$titre = "INITIALEMENT";
?>

<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet"/>
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            $listnumber=array(2,3,4,5);
        ?>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">ENTER NUMBER</div>
                <div class="panel-body"></div>
            </div>
            <?php 
                    form_begin('Lo07', 'het', 'tp05_tournoi_form2.php');
                    form_select('Number', 'number', "", 5, $listnumber);
                    form_input_submit('envoyer');
                    form_end();
            
            
            ?>
    </body>
</html>
