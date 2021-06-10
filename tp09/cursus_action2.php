<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   
    require_once 'Module.class.php';
    require_once 'WebBean.interface.php';
    require_once 'Charte.class.php';
    require_once 'Cursus2.class.php';
    
    $module =new Module($_GET['sigle'],$_GET['label'],$_GET['categorie'],$_GET['effectif']);
    $crus = new Cursus2();
    $crus->addModule($module);
    
    //
  
    $crus ->pageOK();
   
    echo ("<h2>addModule</h2>");
    echo ($module ->_toString());
    
    echo ("<h2>Affich crus</h2>");
    echo "<div>";
    echo $crus->affiche();
    echo "</div>";
    
    echo ("<h2>ex4</h2>");
    echo("ne sauvegarder pas des data");
    $crus->page_foot();
?>

