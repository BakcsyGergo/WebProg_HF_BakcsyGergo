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
        
        echo "<table border = '2'>";

for($i=1; $i<=8;$i++)
{
     echo "<tr>"; 
    for($j=1; $j<=8; $j++)
    {
        $sum = $i+$j;
        if($sum%2 == 0)
        {
             echo "<td bgcolor=#000000 width = 40px height = 40px> </td>";
        }
        else
        {
             echo "<td  width = 40px height = 40px> </td>";
        }
        
    }
     echo "</tr>";
}

echo "</table>";
        
        ?>
    </body>
</html>

