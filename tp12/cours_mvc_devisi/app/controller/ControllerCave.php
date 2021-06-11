
<!-- ----- debut ControllerVin -->
<?php
require_once '../model/Model.php';

class ControllerCave {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerCave : caveAccueil : vue = $vue");
  require ($vue);
 }
 //pour le fichier mesPropositions.php du menu DOCUMENTATION
 public static function mesPropositions(){
  include 'config.php';
  $vue = $root . '/public/documentation/mesPropositions.php';
  if (DEBUG)
    echo ("ControllerCave : caveAccueil : vue = $vue");
  require ($vue);
 }

 
}
?>
<!-- ----- fin ControllerVin -->


