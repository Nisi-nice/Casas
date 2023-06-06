<?php
    session_start();
    $nommbre_nue = (isset($_POST["nombre_nue"]) && $_POST["nombre_nue"] !="")? $_POST["nombre_nue"] : "Sin llenar";
    $_SESSION["boton"];
    $_SESSION["nombre"];
    $_SESSION["nombre_arch"];
    $_SESSION["accion"];
    $_SESSION["nombre_nue"]= $nommbre_nue;
    
    if ($_SESSION["accion"] == "archivo"){
    $nombreViejo = $_SESSION["nombre_arch"];
    $nombreNuevo = $_SESSION["nombre_nue"];
    rename($nombreViejo, "./$nombreNuevo/");
    }
    else {
        $nombreViejo = $_SESSION["nombre_arch"];
        $nombreNuevo = $_SESSION["nombre_nue"];
        rename($nombreViejo, "./$nombreNuevo/");
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
        <center><h1>Se ha renombrado con exito</h1></center>
        <br>
        <form action='./registro.php' method='post' target='_self'>
            <input type='submit' value='REGISTRO'/>

        </form>
    </div>
     </body>
     ";
     
     echo"
     <form action='./registro.php' method='post' target='_self'>
     <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
     </form>";
?>