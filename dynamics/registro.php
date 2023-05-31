<?php
        session_start();
        $_SESSION["boton"] = (isset($_POST["boton"]) && $_POST["boton"] != "")? $_POST["boton"] : false;
        $_SESSION["nombre"] = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
        $_SESSION["nombre_arch"] = (isset($_POST["nombre_arch"]) && $_POST["nombre_arch"] != "")? $_POST["nombre_arch"] : false;

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
            <div id='registro'>
                <center><h1>REGISTRO:</h1></center>
                <br>
                <form action='../ingresar.html' method='post' target='_self'>
                    <input type='submit' value='VOLVER AL INICIO'/>
                </form>
            </div>
            </body>
            ";        
        $archUser="$_SESSION["nombre"]";
        $archRegistro=fopen ($archUser, 'w');
        fwrite($archRegistro,"El usuario $_SESSION["nombre"] $accion");
        fclose($archRegistro);
        $archRegistro=fopen ($archUser, 'r');
        while(!feof($$archRegistro)) {
            $linea=fgets($archRegistro);
            echo "$linea";
        }
        fclose($archRegistro);
?>