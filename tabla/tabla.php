<?php

$television=array(
   array("La1","saber y ganar","15:00h","40min"),
    array("Antena3","la ruleta de la suerte","14:00","60min"),
    array("Telecinco","Mujeres hombres y viceversa","14:00","70min")
       
);

function mostrartabla($television){
    
    echo "<table border=1>
<th>canal</th>
<th>programa</th>
<th>hora</th>
<th>duracion</th>
";
    foreach ($television as $canal) {
        echo "</tr>";
        foreach($canal as $programa){
            echo "><td>".$programa."</td>";
        }
       echo "</tr>"; 
    }
    echo "</table>";
    
}

mostrartabla($television)



?>