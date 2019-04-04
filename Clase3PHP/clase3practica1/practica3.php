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
        <h1>Practica 3</h1>
        <?php
        echo "<pre>";
        print_r($_SERVER);
        print_r($_SERVER["HTTP_USER_AGENT"]);
        echo "</pre>";
        
        $prods=array("salsa"=>4500, "mayonesa"=>5600, "pasta"=>10000);
        ?>

        <h2>Productos</h2>
        <table border="1">
            <thead>
                <tr>
                    <th style='background-color:MediumSeaGreen; font-size: 40px'>Nombre</th>
                    <th style='background-color:MediumSeaGreen; font-size: 40px'>Precio</th>
                    <th style='background-color:MediumSeaGreen; font-size: 40px'>Apreciacion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($prods as $nombre => $precio){
                        echo "<tr>";
                        echo "<td>$nombre</td>";
                        echo "<td>$precio</td>";
                        if($precio>5000){
                            echo "<td style='background-color:Tomato; font-size: 20px'>esta caro</td>";
                        }else{
                            echo "<td style='background-color:DodgerBlue; font-size: 20px'>esta barato</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>