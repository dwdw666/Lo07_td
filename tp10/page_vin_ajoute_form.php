<?php
    echo("<form method='GET' action='page_vin_ajoute_action.php '>");
    
    cree_panel("Formulaire de add vin");
    echo ("<div class='panel panel-body'>");
    echo ("<div class='form-group'>
            <label for='cru'>cru</label>
            <input type='text' class='form-control' name='cru'>
          </div> ");
     echo ("<div class='form-group'>
            <label for='annee'>annee</label>
            <input type='text' class='form-control' name='annee'>
          </div> ");
      echo ("<div class='form-group'>
            <label for='degre'>degre</label>
            <input type='text' class='form-control' name='degre'>
          </div> ");
   
    echo ("  <button type='submit' class='btn btn-primary mb-2'>Submit</button>");
    
    echo ("</div>");
    echo ("</div>");
    
    echo("</form>");
?>

