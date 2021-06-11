
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
//results_vin,results_producteur
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 
      
     <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='RecolteCreated' >
           <label>selection producteur id : </label> <select class="form-control" id='id' name='producteur_id' style="width: 100px">
               <?php
               foreach ($results_producteur as $producteur_id) {
                echo ("<option>$producteur_id</option>");
               }
               ?>
           </select>

           <label>selection vin id : </label> <select class="form-control" id='id' name='vin_id' style="width: 100px">
               <?php
               foreach ($results_vin as $vin_id) {
                echo ("<option>$vin_id</option>");
               }
               ?>
           </select>


         <p/>
           <label>quantites : </label><input type="number" name='quantite' size='75' value='10'> 
      </div>
      <p/>
        <button class="btn btn-primary" type="submit">Go</button>
     </form>
    
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



