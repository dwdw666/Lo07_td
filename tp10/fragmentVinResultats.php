<?php

echo ("<div class='panel panel-body'>");
    $resulta = $database->query($requete_2);
                        $i=0;
                        print ("<table> 
                                    <tr>
                                        <th>id</th>
                                        <th>cru</th>
                                        <th>annee</th>
                                        <th>degre</th>
                                     </tr>");
                        while($tuple=$resulta->fetch()){
                          
                            print(" <tr>
                                        <td>$tuple[id]</td>
                                        <td>$tuple[cru]</td>
                                        <td>$tuple[annee]</td>
                                        <td>$tuple[degre]</td>
                                     </tr>");
                           
                            
                            
                        }
                        print("</table>");
    echo ("</div>");
    echo ("</div>");
?>
