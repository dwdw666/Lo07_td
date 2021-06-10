<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require ('lo07_biblio_formulaire_bt.php');

?>
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
                <div class="panel panel-heading">tpo6_hidden_page1</div>
                <div class="panel-body">
                    
                    <?php 
                           //button 1
                           form_begin('Lo07', 'get', 'tp06_e2_hidden page2.php');
                           printf("<input type='hidden' name='troyes' value='3000'>");
                          
                           form_input_submit('UTT');
                           form_end();
                           printf("<br/>");
                           printf("<br/>");
                           //button 2
                           form_begin('Lo07', 'get', 'tp06_e2_hidden page2.php');
                           printf("<input type='hidden' name='Compiègne' value='3200'>");
                           form_input_submit('UTC');
                           form_end();
                           printf("<br/>");
                           printf("<br/>");
                           //button 3
                           form_begin('Lo07', 'get', 'tp06_e2_hidden page2.php');
                           printf("<input type='hidden' name='Belfort' value='3100'>");
                           form_input_submit('UTC');
                           form_end();
                           printf("<br/>");
                           printf("<br/>");
                    
                    ?>
                </div>
                    
            
            
        </div>
    </body>
</html>
