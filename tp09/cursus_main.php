<?php
    require_once 'WebBean.interface.php';
    require_once 'Charte.class.php';
    require_once 'Module.class.php';
    require_once 'Cursus.class.php';
    
    
    
    $module_lo07 = new Module('LO07','WEB','TM','140');
    $module_if29 = new Module('IF29','ANDOIR','TM','77');
    $crus = new Cursus();
    $crus->addModule($module_lo07);
    $crus->addModule($module_if29);
   
    $crus ->pageOK();
  
    echo $module_lo07->_toString();
    echo $module_if29->_toString();
   
    echo ("<h2>addModule</h2>");
    echo ($module_lo07->_toString());
    echo ($module_if29->_toString());
    
    echo ("<h2>Affich crus</h2>");
    echo "<div>";
    echo $crus->affiche();
    echo "</div>";
    $crus->page_foot();


    
    
    

