<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            function listeJourLabel(){
                $Jour = array('lundi',
                                "mardi", 
                                "mercredi", 
                                "jeudi", 
                                "vendredi", 
                                "samedi", 
                                "dimanche");
                return $Jour;
                
            }
            function listeJourIndice(){
                $Jourindice=array();
                for ($i=1; $i <= 31; $i++) {
                     $Jourindice[$i-1]=$i;
                }
                return $Jourindice;

               
            }
            function listeMois(){
                $Mois=array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
                return $Mois;
            }
            function listeSeance(){
                $Seance=array();
                for ($i=8;$i<=17;$i++){
                    for($j=0;$j<60;$j=$j+20){
                        $Seance[]="$i"."h"."$j";
                    }
                    
                }
                return $Seance;
                
            }
        ?>
    </body>
</html>
