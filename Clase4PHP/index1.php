<?php 
if(isset($_POST["button"]))
{
    if($_POST["nombre"] == "admin" && $_POST["password"] == "1234"){
        header("location:inicio1.php?nombre=".$_POST["nombre"]."&"."password=".$_POST["password"]);
    }
    else{
        $mensaje = "las credenciales no coinciden";
        echo $mensaje;
    }
}else{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>formulario</title>
    </head>
    <body>
        <h1>Formulario de login</h1>
        <form method="POST" action="index1.php">
            <input name="nombre" type="text" placeholder="nombre de ususario">
            <input name="password" type="password" placeholder="contraseña">
            <input name="button" type="submit" value="iniciar sesion">
        <?php

        ?>
    </body>
</html>
<?php } ?>

