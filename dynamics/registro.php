<?php
        session_start();
        $_SESSION["boton"];
        $_SESSION["nombre_arch"];
        $_SESSION["opcion"];  
        $_SESSION["nombre"];
        $_SESSION["accion"];
        $_SESSION["nombre_nue"];
        $_SESSION["casa"]; 

        if ($_SESSION["opcion"] == "crear"){
            echo $imprimir= "creó";
   
      }      
      else{ 
           if ($_SESSION["opcion"] == "renombrar"){
            echo $imprimir= "renombró";
           }
           else{ 
                if ($_SESSION["opcion"] == "eliminar"){
                    echo $imprimir= "eliminó";
                }      
           } 
      }      ;  
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
                <br>";
                $archUser = $_SESSION["nombre"];
                $casa=$_SESSION["casa"]; 
                $arch= $_SESSION["nombre_arch"];
                $archRegistro= fopen ($archUser, 'a+');
                fwrite($archRegistro," $archUser de la casa $casa,  $imprimir: $arch \n ");
                fclose($archRegistro);
                $archRegistro= fopen ($archUser, 'r');
                while(!feof($archRegistro)) {
                    $linea=fgets($archRegistro);
                    echo $linea; 
                    echo "<br>";
                }
                fclose($archRegistro);
        echo "    
                <form action='../ingresar.html' method='post' target='_self'>
                    <input type='submit' value='VOLVER AL INICIO'/>
                </form>
            </div>
            </body>
            ";
?>