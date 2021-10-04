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
        // put your code here
        $tomb = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');
        for($i=0; $i<count($tomb); $i++)
    {
        if(is_numeric($tomb[$i]))
        {
             echo gettype($tomb[$i])." igen <br>" ;
        }
        else
        {
             echo gettype($tomb[$i])." nem <br>" ;
        }
        
    }
        ?>
    </body>
</html>
