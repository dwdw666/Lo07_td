
<!-- ----- debut ControllerVin -->
<?php
require_once '../model/ModelRecolte.php';

class ControllerRecolte {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerVin : caveAccueil : vue = $vue");
  require ($vue);
 }

 // --- Liste des vins
 public static function RecolteReadAll() {
  $results = ModelRecolte::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/Recolte/viewAll.php';
  require ($vue);
 }

 // Affiche un formulaire pour sélectionner un id qui existe
 public static function vinReadId($args) {
  if(DEBUG) echo("ControllerVin:vinReadId:begin</br>");
  $results = ModelVin::getAllId();

  // ----- Construction chemin de la vue
  //solution1: vinReadOne
  //solution2: vinDeleted
  
  $target = $args['target'];
  if(DEBUG) echo("ControllerVin:vinReadId: target = $target</br>");
  
  include 'config.php';
  $vue = $root . '/app/view/vin/viewId.php';
  require ($vue);
 }

 // Affiche un vin particulier (id)
 public static function vinReadOne() {
  $vin_id = $_GET['id'];
  $results = ModelVin::getOne($vin_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/vin/viewAll.php';
  require ($vue);
 }
 public static function vinDeleted(){
  $vin_id = $_GET['id'];
  $results = ModelVin::delete($vin_id);  
   
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/vin/viewDeleted.php';
  require ($vue);
  
  
 }
 // Affiche le formulaire de creation d'un Recolte
 public static function RecolteCreate() {
  $results_vin = Modelvin::getAllId();
  $results_producteur = Modelproducteur::getAllId();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/Recolte/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau vin.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function RecolteCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelRecolte::insert(
      htmlspecialchars($_GET['producteur_id']), htmlspecialchars($_GET['vin_id']), htmlspecialchars($_GET['quantite'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/Recolte/viewInserted.php';
  require ($vue);
 }
 
}
?>
<!-- ----- fin ControllerVin -->


