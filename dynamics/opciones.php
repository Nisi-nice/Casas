<?php
     session_start();
     $_SESSION["opcion"] = (isset($_POST["opcion"]) && $_POST["opcion"] != "")? $_POST["opcion"] : false;
     $_SESSION["boton"] = (isset($_POST["boton"]) && $_POST["boton"] != "")? $_POST["boton"] : false;

     function crear(){
        echo "<head>
             <link rel='stylesheet' href='../statics/style_casas.css'>
             </head>
             <body>
             <div class='opcion'>
                    <center><h1>Elige:</h1></center>
                    <formaction='./accion.php' method='post' target='_self'>
                    <label>¿Qué quieres crear?:
                    <br>
                    <input type='radio' name='opcion' checked value='archivo'>
                    Archivo
                    <br>
                    <input type='radio' name='opcion' value='carpeta'>
                    Carpeta
                    <br>
                    </label><br>
                    <label>Nombre de tu carpeta o arhivo:
                    <input name='nombre'/>
                    </label><br>
                    <input type='submit' value='CREAR'/><br>
                  </form>
             </div>
               <form action='./registro.php' method='post' target='_self'>
               <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
               </form>
               <form action='./exit.php' method='post' target='_self'>
               <div id='centro1'><input type='submit' value='SALIR'/><br></div>
               </form>
        </body>
        ";
        }
     function eliminar(){
          echo "<head>
             <link rel='stylesheet' href='../statics/style_casas.css'>
             </head>
             <body>
             <div class='opcion'>
                    <center><h1>Elige:</h1></center>
                    <formaction='./accion.php' method='post' target='_self'>
                    <label>¿Qué quieres eliminar?:
                    <br>
                    <input type='radio' name='opcion' checked value='archivo'>
                    Archivo
                    <br>
                    <input type='radio' name='opcion' value='carpeta'>
                    Carpeta
                    <br>
                    </label><br>
                    <label>Nombre de la carpeta o arhivo:
                    <input name='nombre'/>
                    </label><br>
                    <input type='submit' value='ELIMINAR'/><br>
                  </form>
             </div>
               <form action='./registro.php' method='post' target='_self'>
               <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
               </form>
               <form action='./exit.php' method='post' target='_self'>
               <div id='centro1'><input type='submit' value='SALIR'/><br></div>
               </form>
        </body>
        ";
     }
     function renombrar(){
          echo "<head>
             <link rel='stylesheet' href='../statics/style_casas.css'>
             </head>
             <body>
             <div class='opcion'>
                    <center><h1>Elige:</h1></center>
                    <form action='./accion.php' method='post' target='_self'>
                    <label>¿Qué quieres renombrar?:
                    <br>
                    <input type='radio' name='opcion' checked value='archivo'>
                    Archivo
                    <br>
                    <input type='radio' name='opcion' value='carpeta'>
                    Carpeta
                    <br>
                    </label><br>
                    <label>Nombre de la carpeta o arhivo:
                    <input name='nombre'/>
                    </label><br>
                    <label>Nuevo nombre de la carpeta o arhivo:
                    <input name='nombre_nue'/>
                    </label><br>
                    <input type='submit' value='RENOMBRAR'/><br>
                  </form>
             </div>
               <form action='./registro.php' method='post' target='_self'>
               <div id='centro'><input type='submit' value='REGISTRO'/><br></div>
               </form>
               <form action='./exit.php' method='post' target='_self'>
               <div id='centro1'><input type='submit' value='SALIR'/><br></div>
               </form>
        </body>
        ";
     }
     if ($_SESSION["opcion"] == "crear")
           return crear();
     else 
          if ($_SESSION["opcion"] == "renombrar")
               return renombrar();
          else 
               if ($_SESSION["opcion"] == "eliminar")
                    return eliminar();
               
?>
