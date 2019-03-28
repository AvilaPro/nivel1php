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
            $comp = 18;
            $edad = 20;
            //otras formas de if
            // if ($edad >= 18):
            //     echo "eres mayor de edad";
            // endif;
            //el uso del if ternario
            // $r = ($edad >= $comp) ? 'mayor de edad' : 'menor de edad';
            // echo $r;
        ?>
        <ol>
            <li <?php echo ($edad>=18)? 'style="background:red;"':'style="background:blue;"'?>><?php echo "edad: ".$edad ?></li>
            <li <?php echo ($comp>=18)? 'style="background:red;"':'style="background:blue;"'?>><?php echo "edad: ".$edad ?></li>
    </body>
</html>
