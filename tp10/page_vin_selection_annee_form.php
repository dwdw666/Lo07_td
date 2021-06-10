<?php
    require_once'bibliotheque.php';
    $requete_3 = "select distinct annee from vin order by annee";
    $resulta = $database->query($requete_3);
    echo("<form method='GET' action='page_vin_selection_annee_action.php'>");
    cree_panel("Formulaire de select annee");
    echo ("<div class='panel panel-body' id='selec'>");
    echo (" <div class='form-group'>
            <label for='exampleFormControlSelect1'>Example select</label>
            <select multiple class='form-control' name ='selec' id='exampleFormControlSelect1'>");
    while($tuple = $resulta -> fetch()){
        echo("<option>$tuple[annee]</option>");
    }
    echo (" </select>
          </div>");
    echo ("  <button type='submit' class='btn btn-primary mb-2'>Submit</button>");
    
    echo ("</div>");
    echo ("</div>");
    echo("</form>");
  
?>

