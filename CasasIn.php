<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ---------------------- FORMULARIO <------------------------- -->
    <h1>Inicio</h1>
    
    <form action"./noc.php" method= "post">
        <fieldset>
            <legend>Bienvenido</legend>
            <label>Nombre:
            <input type="text" name="name"/>
            </label><br><br>
            <label for="casa" >¿A qué casa perteneces?:</label>
            <select name="casa" id="casa">Casa
                <option value="Halcones">Halcones</option>
                <option value="Teporingos">Teporingos</option>
                <option value="Ajolotes">Ajolotes<option>
            </select><br><br>
        
  
            <input type="reset" value="Borrar">
            <input type="submit" value="Enviar">
        </fieldset>    
    </form>';

<?php


    //-----------------------> ARREGLO DEL USUARIO <-----------------------//
    $nombre=(isset($_POST["name"]) && $_POST["name"] !="")? $_POST["name"] : "Sin llenar";
    $casa=(isset($_POST["casa"]) && $_POST["casa"] !="")? $_POST["casa"] : false;

    $nombre = explode(" ",$nombre);
?>
</body>
</html>  