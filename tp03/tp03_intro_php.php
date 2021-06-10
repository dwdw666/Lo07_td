<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
     $nom="Wang";
     $prenom="Taojun";
     $age=23;
     $ingeniuer=true;
      
     $capitalesafrique=array("Abuja",
                        "Accra",
                        "Addis-Abeba",
                        "Alger",
                        "Antananarivo",
                       "Asmara",
                        "Bamako",
                        "Bangui",
                        "Banjul",
                        "Bissau",  
                        "Bujumbura");
    array_push($capitalesafrique,"Maouto");
    
    unset($capitalesafrique[5]);
 ?>
<html>
    <head>
        <title>tp03</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="tp02_css.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
          <!-- navbar -->
        <nav class="navbar navbar-inverse  navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Web 03</a>
                </div>
                <ul class="nav navbar-nav ">
                    <li><a href="#ex1">EXERCISE 1</a></li>
                    <li><a href="#ex2">EXERCISE 2</a></li>
                    <li><a href="#ex3">EXERCISE 3</a></li>
                    <li><a href="#ex4">EXERCISE 4</a></li>
                    <li><a href="#ex5">EXERCISE 5</a></li>
                </ul>
            </div>
         </nav>
            <!-- ex1 -->
       
            <div class="panel panel-success" id="ex1">
                <div class="panel-heading">EX1</div>
                <div class="panel-body" ><?php echo "<div style=\"Color:#269abc\">Bonjour a tous</div>" ?></div>
            </div>
        
            <!--ex2-->
            
            <div class="panel panel-default" id="ex2">
                <div class="panel-heading">EX2</div>
                <div class="panel-body">
                    <ul class="list-group" >
                        <li class="list-group-item"><?php echo $nom ?> </li>
                        <li class="list-group-item"><?php echo $prenom ?> </li>
                        <li class="list-group-item"><?php echo $age?> </li>
                        <li class="list-group-item"><?php echo $ingeniuer ?> </li>
                    </ul>
                </div>
            </div>
            <!-- ex3 -->
            <div class="panel panel-success" id="ex3">
                <div class="panel-heading">EX3</div>   
                <div class="panel-body"><?php echo "<pre>";echo "<h2>print_r</h2>";echo "<pre>"; print_r($capitalesafrique)?></div>
           
            
                <!-- ex3.5 -->
                <h2>foreach</h2>
                <div class="panel-body">
                    <ul class="list-group" >
                        <?php 
                             foreach ($capitalesafrique as $captal){
                                 echo "<li class=\"list-group-item\">,$captal,</li>";
                             }
                        ?> 
                     </ul>
                 </div>
                <!-- ex3.6 -->
                <h2>implode</h2>
                
                    <div class="panel-body">
                        <?php
                           $str_captil=implode(";", $capitalesafrique);
                           echo $str_captil;
                        ?>
                    </div>
               
                <!-- ex3.7 -->
                <h2>acces aux donne</h2>
                <div class="panel-body"><?php 
                    $num=count($capitalesafrique); 
                    echo "NOMBRE de tableau $num"?>
                </div>
                <div class="panel-body"><?php 
                    sort($capitalesafrique);
                    print_r($capitalesafrique)?>
                </div>
            </div>
            <!-- ex4 -->
            <?php $captiaieseurope=array("France"=>"Pari",
                                          "Italie"=>"Rome",
                                            "Belgique"=>"Bruxelles",
                                            "Espagne"=>"Madrid",
                                            "Allemagne"=>"Berlin")
            ?>
            <div class="panel panel-success" id="ex4">
                <div class="panel-heading">EX4</div>
                <div class="panel-body"><?php echo "Capital de Allemagne est ",$captiaieseurope["Allemagne"] ?></div>
           
                <div class="panel-body"> <?php
                    $captiaieseurope["France"]="troyes";
                    echo "Capitale de France est ",$captiaieseurope["France"];
                ?></div>
                
                <div class="panel-body"><?php
                    foreach($captiaieseurope  as $key => $value){
                        echo $key . '-------' . $value . '<br />';
                    }
                    
                ?></div>
                <!<!-- ex4.5 -->
                <div class="panel-body" ><?php
                    $keys=array();
                    $valeurs=array();
                    foreach($captiaieseurope  as $key => $value){
                        array_push($keys,$key);
                        array_push($valeurs,$value);
                    }
                    print_r($keys);
                    echo "<br/>";
                    print_r($valeurs);
                ?></div>
                </div>
                <!-- ex5 -->
                <div class="panel panel-success" id="ex5">
                    <div class="panel-heading">EX5</div>
                    <div class="panel-body"><?php 
                        function bage_danger($lable,$compteur){
                                  echo "<button type=\"button\" class=\"btn btn-danger\">
                                            $lable <span class=\"badge badge-light\">$compteur</span>
                                            <span class=\"sr-only\">unread messages</span>
                                        </button>";
                        }
                        bage_danger("Web",6);
                        echo "<br/>";
                        foreach ($capitalesafrique as $captal){
                                 $len= strlen($captal);
                                 bage_danger($captal, $len);
                        }
                    ?></div>
                    
                </div>
            </div>
       
    </body>
</html>


