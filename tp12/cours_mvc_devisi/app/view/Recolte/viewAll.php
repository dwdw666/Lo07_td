
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
$cols = $results[0]; 
$datas = $results[1];
?>
<!-- $cols = $results[0]; $datas = $results[1]; -->
<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>

    <table class = "table table-striped table-bordered">
        <thead>
        <tr>
            <?php
                foreach ($cols as $value){
                    echo("<th>$value</th>");
                }
          ?>
        </tr>
      </thead>
      <tbody>
          <?php
                 $isTrue = true;
                 foreach ($datas as $key_datas => $arr){
                    echo("<tr>");
                    foreach($arr as $key_arr => $value){
                        if($isTrue){
                             echo("<td>$value</td>");
                             $isTrue =false;
                        }else{
                             $isTrue =true;
                        }
                      
                    }
                    echo("</tr>");
                }     

          
          
          
          ?>
         
      </tbody> 
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  