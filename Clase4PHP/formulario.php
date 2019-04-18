<html>
    <head>
        <meta charset="UTF-8">
        <title>formulario</title>
    </head>
    <body>
    <?php
            $meses = array(1 => "enero",2 => "febrero",3 => "marzo",4 => "abril",5 => "mayo",6 => "junio",
            7 => "julio",8 => "agosto",9 => "septiembre",10 => "octubre",11 => "noviembre",12 => "diciembre");
        ?>

        <?php 
            if(isset($_POST["button"])){
                print_r($_POST);
                echo "<ul>";
                for ($i=0;$i<count($_POST["mes"]);$i++){
                    echo "<li>".$meses[$_POST["mes"][$i]]."</li>";
                };
                echo "</ul>";
            }
        
        ?>
        <!-- <?php 
            if(isset($_POST["button"])){
                print_r($_POST);
                echo "<ul>";
                for ($i=0;$i<count($_POST["mes"]);$i++){
                    echo "<li>".$_POST["mes"][$i]."</li>";
                };
                echo "</ul>";
            }
        
        ?> -->

        <h1>Formulario con array</h1>
        
        <form method="POST" action="formulario.php">
            <input name="nombre" type="text" placeholder="nombre">
            <!-- para enviar un arreglo de una entrada de datos colocar al lado del nombre [] -->
            <select name="mes[]" multiple>
                <?php foreach($meses as $clave => $mes):
                    echo '<option value="'.$clave.'">'.$mes.'</option>';
                    endforeach;
                ?>
            </select>
            <p>Acepta los terminos?</p>
            <label>
                <input type="checkbox" name="terminos[]" value="si">
                Si
                <input type="checkbox" name="terminos[]" value="no">
                NO
                <input type="checkbox" name="terminos[]" value="talvez">
                Tal vez
                <input type="checkbox" name="terminos[]" value="porque esta">
                Porque esta
            </label>
            <button tyope="submit" name="button">enviar</button>
        </form>
    </body>
</html>