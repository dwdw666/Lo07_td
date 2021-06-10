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
        <title>cookie2</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="tp05.css">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <a href="lo07_analyse_superglobales.php?cookie=$_COOKIE">SSS</a>
    </body>
</html>
