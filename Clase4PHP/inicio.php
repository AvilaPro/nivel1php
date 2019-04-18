

<html>
    <head>
        <meta charset="UTF-8">
        <title>inicio</title>
    </head>
    <body>
        
        <h1>Inicio</h1>
        <pre>
        <?php 
        print_r($_POST);
        //echo $_POST["nombre1"]; para ver como bota el error de no estar definido
        ?>
        </pre>

        <h1> Bienvenido 
            <?php if (isset($_POST["nombre"]))
            echo $_POST["nombre"];
            else
                echo "lo siento debe iniciar sesion";
            ?> 
        </h1>
        
        <h1> <?php 
            if(isset($_POST["nombre"]))
                echo "Bienvenido ".$_POST["nombre"];
            else
                echo "lo siento debe iniciar sesion"; 
            ?>
        </h1>
    </body>
</html>

