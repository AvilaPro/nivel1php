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
        $notas = array();
        for($i=0;$i<10;$i++){
            $notas[] = rand(1,100);
        }
        print_r($notas);

        $suma=array_sum($notas);
        $promedio=$suma/count($notas);

        echo"<br><h3>El promedio es: $promedio</h3>";

        sort($notas);
        echo"<ul>";
        for($i=0;$i<count($notas);$i++){
            echo "<li>$notas[$i]</li>";
        }
        echo "</ul>";

        if(in_array(5,$notas)){
            echo "<p>el numero 5 esta en el arreglo</p>";
        }else{
            echo "<p>el numero 5 no esta en el arreglo</p>";
        }

        ?>

        
    </body>
</html>