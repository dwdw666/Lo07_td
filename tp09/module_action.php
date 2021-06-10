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
    
    $module =new Module($_GET['sigle'],$_GET['label'],$_GET['categorie'],$_GET['effectif']);
    
    if($module->valide()){
           $module->pageOK();
           echo ($module->sauveTXT());
           echo ($module->sauveBDR("module"));
           echo ($module->createTable("module"));
          
           $module->page_foot();
    }
?>

