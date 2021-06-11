
<!-- ----- debut ModelVin -->

<?php
require_once 'Model.php';

class ModelRecolte {
 private $producteur_id,$vin_id,$quantite;

 // pas possible d'avoir 2 constructeurs
 public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite= NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($producteur_id) && !is_null($vin_id)) {
   $this->producteur_id = $producteur_id;
   $this->vin_id = $vin_id;
   $this->quantite = $quantite;
  }
 }
// retourne une liste des id

 public static function getMany($query) {
  try {
   $database = Model::getInstance();
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelVin");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
//$cols array contains all parameters
 public static function getAll() {
  try {
    $database = Model::getInstance();
    $cols =[];
    $query = "select region, cru, annee, degre, nom, prenom, quantite from vin,
             producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id =
             producteur.id order by region";

    $statement = $database->prepare($query);
    $statement->execute();
    $results_1 = $statement->fetch(PDO::FETCH_ASSOC);
    foreach ($results_1 as $key => $value){
              array_push($cols, $key);
    }
    $results_2 = $statement->fetchAll();
    return array($cols,$results_2);
   
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getOne($id) {
  try {
   $database = Model::getInstance();
   $query = "select * from vin where id = :id";
   $statement = $database->prepare($query);
   $statement->execute([
     'id' => $id
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelVin");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function insert($producteur_id, $vin_id, $quantite) {
  try {
   $database = Model::getInstance();

   // recherche de la valeur de la clé = max(id) + 1
   $query = "SELECT `producteur_id`, `vin_id` FROM `recolte` WHERE producteur_id = :producteur_id AND vin_id = :vin_id";
   $statement = $database->query($query);
   $statement->execute([
     'producteur_id' => $producteur_id,
     'vin_id' => $vin_id
   ]);
   if($statement && $statement->rowCount()){//判断结果集对象是否存在,并且结果集数量是否大于0,也就是说是否存在数据
       // update d'un nouveau tuple;
       update($producteur_id, $vin_id, $quantite);
       return "update";
   }else{
        // ajout d'un nouveau tuple;
        $query = "INSERT INTO `recolte`(`producteur_id`, `vin_id`, `quantite`) VALUES (:producteur_id,:vin_id,:quantite)";
        $statement = $database->prepare($query);
        $statement->execute([
          'producteur_id' => $producteur_id,
          'vin_id' => $vin_id,
          'quantite' => $quantite
        ]);
        return "ajout";
   }

  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }

 public static function update($producteur_id, $vin_id, $quantite) {
  $database = Model::getInstance();
  $query = "UPDATE `recolte` SET `quantite`= :quantite WHERE producteur_id = :producteur_id AND vin_id = :vin_id";
  $statement = $database->prepare($query);
  $statement->execute(
          ['quantite' => $quantite],
          ['producteur_id' => $producteur_id],
          ['vin_id' => $vin_id]      
          );
 }

 public static function delete($id) {
  $database = Model::getInstance();
  echo ("ModelVin : delete() TODO ....");
  $query = "DELETE from vin where not exists (select id from recolte where vin.id = recolte.vin_id) AND vin.id = :id";
  $statement = $database->prepare($query);
  $statement->execute(['id' => $id]);
  return $statement; //return delete how much row
 }

}
?>
<!-- ----- fin ModelVin -->
