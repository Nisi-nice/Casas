<?php
     $nombre=(isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
     $casa=(isset($_POST["casa"]) && $_POST["casa"] != "")? $_POST["casa"] : false;

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
          <div id='titulo'> ¿Qué quieres hacer hoy $nombre?</div>";
          function desplegar_tepos(){
     echo "<head>
          <link rel='stylesheet' href='./style_casas.css'>
          </head>
          <body>
          <div id='tepos'>
            <center><h1>ACCIONES:</h1></center>
               <form action='./opciones.php' method='post' target='_self'>
               <label>OPCIONES:
                <br>
                <input type='radio' name='opcion' checked value='crear'>
                CREAR
                <br>
                <input type='radio' name='opcion' value='renombrar'>
                RENOMBRAR
                <br>
                <input type='radio' name='opcion' value='eliminar'>
                ELIMINAR
                <br>
               </label><br>
               <input type='submit' value='CONTINUAR'/><br>
               </form>
          </div>
          <form action='./exit.php' method='post' target='_self'>
             <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
             <div id='centro1'><input type='submit' value='SALIR'/><br></div>
          </form>
     </body>
     ";
     }
     function desplegar_ajols(){
          echo "<head>
               <link rel='stylesheet' href='./style_casas.css'>
               </head>
               <body>
               <div id='ajols'>
                 <center><h1>ACCIONES:</h1></center>
                    <form action='./opciones.php' method='post' target='_self'>
                    <label>OPCIONES:
                     <br>
                     <input type='radio' name='opcion' checked value='crear'>
                     CREAR
                     <br>
                     <input type='radio' name='opcion' value='renombrar'>
                     RENOMBRAR
                     <br>
                     <input type='radio' name='opcion' value='eliminar'>
                     ELIMINAR
                     <br>
                    </label><br>
                    <input type='submit' value='CONTINUAR'/><br>
                    </form>
               </div>
               <form action='./exit.php' method='post' target='_self'>
             <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
             <div id='centro1'><input type='submit' value='SALIR'/><br></div>
             </form>
          </body>
          ";
          }
          function desplegar_halcons(){
               echo "<head>
                    <link rel='stylesheet' href='./style_casas.css'>
                    </head>
                    <body>
                    <div id='halcons'>
                      <center><h1>ACCIONES:</h1></center>
                         <form id= 'input' action='./opciones.php' method='post' target='_self'>
                         <label>OPCIONES:
                          <br>
                          <input type='radio' name='opcion' checked value='crear'>
                          CREAR
                          <br>
                          <input type='radio' name='opcion' value='renombrar'>
                          RENOMBRAR
                          <br>
                          <input type='radio' name='opcion' value='eliminar'>
                          ELIMINAR
                          <br>
                         </label><br>
                         <input type='submit' value='CONTINUAR'/><br>
                         </form>
                    </div>
                    <form action='./exit.php' method='post' target='_self'>
                    <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
                    <div id='centro1'><input type='submit' value='SALIR'/><br></div>
                    </form>
               </body>
               ";
               }
     if ($casa == "Teporingos")
           return desplegar_tepos();
     else 
          if ($casa == "Ajolotes")
               return desplegar_ajols();
          else 
               if ($casa == "Halcones")
                    return desplegar_halcons();
?>