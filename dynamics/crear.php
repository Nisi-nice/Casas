<?php
    session_start();
    $_SESSION["boton"] = (isset($_POST["boton"]) && $_POST["boton"] != "")? $_POST["boton"] : false;
    $_SESSION["nombre"] = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
    $_SESSION["nombre_arch"] = (isset($_POST["nombre_arch"]) && $_POST["nombre_arch"] != "")? $_POST["nombre_arch"] : false;

    $nombrearch= $_SESSION["nombre_arch"];
    $nuevoArch = fopen ($nombrearch, 'w');

    session_destroy();

    echo "
     <!DOCTYPE html>
     <html lang='en'>
     <head>
          <link rel='stylesheet' href='../statics/style_casas.css'>
         <meta charset='UTF-8'>
         <meta http-equiv='X-UA-Compatible' content='IE=edge'>
         <meta name='viewport' content='width=device-width, initial-scale=1.0'>
         <title>Document</title>
     </head>
     <body>
    <div id='bye'>
        <center><h1>Se ha creado tu archivo</h1></center>
        <br>
        <form action='../ingresar.html' method='post' target='_self'>
            <input type='submit' value='VOLVER AL INICIO'/>

        </form>
    </div>
     </body>
     ";

?>