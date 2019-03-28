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
        <ol>
            <?php
                // $max = rand(10, 20);
                // echo "el numero max es: $max";
                // // for($i=0; $i < $max; $i++){
                // //     echo "<li>$i</li>";
                // // }
                // for($i=0; $i < $max; $i++){
                //     if($i == 12)
                //     break;
                // echo "<li>$i</li>";
                // }
            ?>
        </ol>
        <!-- <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Eduardo</td>
                    <td>Mejias</td>
                    <td>31</td>
                </tr>
            </tbody>
        </table> -->

        <table>
            <?php $maxi = 10;
            for($u=1;$u < $maxi; $u++){
                echo "<tr";
                echo ($u % 2 != 0)? ' style="background:red"': '';
                echo ">";
                    for($i=0;$i<5;$i++){
                    echo "<td>celda $i</td>";                    
                }
                echo "</tr>";
            } 
            ?>
        </table>
    </body>
</html>
