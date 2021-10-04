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
        //1.feladat

        echo "A Mai nap:" . date("Y/m/d") . "<br>";
        echo "Ma " . date("l");
        echo "<br>";
        //Osztotábla
        
        
        echo "<table border=\"1\" align=\"center\">";
        
        for ($oszto = 1; $oszto <=10; $oszto++) {
            echo "<tr><th>Osztando</th>";
        echo "<th>Oszto</th>";
        echo "<th>Hányados</th></tr>";
            for ($osztando = $oszto; $osztando <=($oszto*10);$osztando=$osztando+$oszto){
                  $hanyados= ($osztando / $oszto);
                  
                echo "<tr><td>";
        echo $osztando;
        echo "</td><td>";
        echo $oszto;
        echo "</td><td>";
        echo $hanyados;
        
        echo "</td></tr>";  
        
        
       
            }
              echo "<tr height=20px></tr>";    
        }
        
        ?>
    </body>
</html>
