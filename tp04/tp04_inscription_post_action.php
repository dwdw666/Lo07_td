<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="tp04.css">
        <title>resultat</title>
    </head>
    <body>
       <div class="container">
        
        <div class="panel panel-success">
            <div class="panel-heading">Traitemant en PHP d'un fornulaire</div>
            <div class='panel-body'>liste des parametres</div>
        </div>
        <!-- tableau de resultat -->
        <h2>Table de resultat</h2>
        
        <table>
            <tr>
                <th>name</th>
                <th>valuer</th>
            </tr>
            <tr>
                <th>nom</th>
                <td><?php echo $_POST['nom'];  ?></td>
            </tr>
            <tr>
                <th>prenom</th>
                <td><?php echo $_POST["prenom"]; ?></td>
            </tr>
            <tr>
                <th>email</th>
                <td><?php echo $_POST["email"];  ?></td>
            </tr>
            <tr>
                <th>sexe</th>
                <td><?php echo $_POST["chksex"];  ?></td>
            </tr>
            <tr>
                <th>origine</th>
                <td><?php echo $_POST["etude"]; ?></td>
            </tr>
            <tr>
                <th>ST07</th>
                <td><?php 
                    if(!empty($_POST["VALITARISATION1"])){
                        if($_POST["VALITARISATION1"]=='Y'){
                            echo "oui";
                        }
                    }
                    else{
                        echo "Non";
                    }
                ?></td>
            </tr>
            <tr>
                <th>ST09</th>
                <td><?php 
                    if(!empty($_POST["VALITARISATION2"])){
                        if($_POST["VALITARISATION1"]=='Y'){
                            echo "oui";
                        }
                    }
                    else{
                        echo "Non";
                    }
                ?></td>
            </tr>
            <tr>
                <th>ST10</th>
                <td><?php 
                    if(!empty($_POST["VALITARISATION3"])){
                        if($_POST["VALITARISATION1"]=='Y'){
                            echo "oui";
                        }
                    }
                    else{
                        echo "Non";
                    }
                ?></td>
            </tr>
            <tr>
                <th>module</th>
                <td><?php echo $_POST["module"];?></td>
            </tr>
            <tr>
                <th>infomation complementaire</th>
                <td><?php echo $_POST["info"];?></td>
            </tr>
        </table>
        
        <!-- tableau des reponses des questions -->
        <div class="panel panel-info">
            <div class="panel-heading">Mes reponse aux questions</div>
            <div class="panel-body">liste de question 2.7</div>
            
        </div>
        <h2>Tableau des reponses</h2>
        <table>
            <tr>
                <th>question</th>
                <th>reponses</th>
            </tr>
            <tr>
                <td>question1</td>
                <td>Il vas etre rempliser par le value par defaut</td>
            </tr>
            <tr>
                <td>question2</td>
                <td>recupere array de meme attribute name</td>
            </tr>
                <td>question3</td>
                <td>recupere array _GET</td>
            <tr>
            <tr>
                <td>question4</td>
                <td/>http://localhost/lo07_tp/tp04/tp04_inscription_get_action.php?nom=ww&prenom=eee&email=www%40www&chksex=male&etude=non&module=cs&info=aaa</td>
            </tr>
            <tr>
                <td>question5</td>
                <td>utilise le metode post</td>
            </tr>
            <tr>
                <td>question 5.1</td>
                <td>toutes les parametre sont affiches dans le url quand on utilis le methode "GET" ce qui est oppose pour methode "post"</td>
            </tr>
            <tr>
                <td>question5.2<td>
                <td>les parametres de post sont toujour caches en URL </td>
                    
            </tr>
        </table>
        
       </div>
    </body>
    
</html>
