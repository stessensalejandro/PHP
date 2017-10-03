<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>titulo</title>
    </head>
    <body>
        <?php
        
        $arreglo = array(1,20,100);
        $arreglo2;
        
        function concatenar($arreglo)
        {
            $i=0;
            foreach($arreglo as $value) {
               $arreglo[$i]= $value*2;
               echo "$arreglo[$i] <br>";
               $i++;
            } 
        }
        echo concatenar($arreglo);
        
        ?>
    </body>
</html>
