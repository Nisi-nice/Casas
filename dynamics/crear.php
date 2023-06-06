<?php
    session_start();
    $nombre_arch =(isset($_POST["nombre_arch"]) && $_POST["nombre_arch"] != "")? $_POST["nombre_arch"] : false;
    $accion= (isset($_POST["accion"]) && $_POST["accion"] != "")? $_POST["accion"] : false;
    $_SESSION["boton"];
    $_SESSION["nombre"];
    $_SESSION["nombre_arch"];
    $_SESSION["accion"];    
    
    if ($_SESSION["accion"] == "archivo"){

        $nombrearch= $_SESSION["nombre_arch"];
        $nuevoArch = fopen ($nombrearch, 'w');
    }
    else {
        $nombrecarp = $_SESSION["nombre_arch"];
        mkdir($nombrecarp, 0777, true);
    }

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
        <center><h1>Se ha creado con exito</h1></center>
        <br>
        <form action='../ingresar.html' method='post' target='_self'>
            <input type='submit' value='VOLVER AL INICIO'/>

        </form>
    </div>
     </body>
     ";
   // $accion= "creó $nombrearch";
    echo"
    <form action='./registro.php' method='post' target='_self'>
    <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
    </form>";
?>