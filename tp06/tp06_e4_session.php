<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    //strat seesion
    session_start();


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $_SESSION['nom_prenom']="wang taojun";
            $_SESSION['module']="Lo07 NF16 Lo12";
        ?>
        <a href="lo07_analyse_superglobales.php">SSS</a>
    </body>
</html>
