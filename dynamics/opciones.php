<?php
     session_start();
     $boton = (isset($_POST["boton"]) && $_POST["boton"] != "")? $_POST["boton"] : false;
     $nombre_arch =(isset($_POST["nombre_arch"]) && $_POST["nombre_arch"] != "")? $_POST["nombre_arch"] : false;
     $nombre_nue=(isset($_POST["nombre_nue"]) && $_POST["nombre_nue"] !="")? $_POST["nombre_nue"] : "Sin llenar";
     $accion= (isset($_POST["accion"]) && $_POST["accion"] != "")? $_POST["accion"] : false;
     $opcion = (isset($_POST["opcion"]) && $_POST["opcion"] != "")? $_POST["opcion"] : false;

     $_SESSION["boton"] = $boton;
     $_SESSION["nombre"];
     $_SESSION["casa"];
     $_SESSION["nombre_arch"] = $nombre_arch;
     $_SESSION["nombre_nue"] = $nombre_nue;
     $_SESSION["opcion"] = $opcion;
     $_SESSION["accion"] = $accion;

     function crear(){
        echo "<head>
             <link rel='stylesheet' href='../statics/style_casas.css'>
             </head>
             <body>
             <div class='opcion'>
                    <center><h1>Elige:</h1></center>
                    <form action='./crear.php' method='post' target='_self'>
                    <label>¿Qué quieres crear?:
                    <br>
                    <input type='radio' name='accion' checked value='archivo'>
                    Archivo
                    <br>
                    <input type='radio' name='accion' value='carpeta'>
                    Carpeta
                    <br>
                    </label><br>
                    <label>Nombre de tu carpeta o arhivo:
                    <input name='nombre_arch'/>
                    </label><br>
                    <input type='submit' value='CREAR'/><br>
                  </form>
             </div>
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
                    <form action='./eliminar.php' method='post' target='_self'>
                    <label>¿Qué quieres eliminar?:
                    <br>
                    <input type='radio' name='accion' checked value='archivo'>
                    Archivo
                    <br>
                    <input type='radio' name='accion' value='carpeta'>
                    Carpeta
                    <br>
                    </label><br>
                    <label>Nombre de la carpeta o arhivo:
                    <input name='nombre_arch'/>
                    </label><br>
                    <input type='submit' value='ELIMINAR'/><br>
                  </form>
             </div>
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
                    <form action='./renombrar.php''./registro.php' method='post' target='_self'>
                    <label>¿Qué quieres renombrar?:
                    <br>
                    <input type='radio' name='accion' checked value='archivo'>
                    Archivo
                    <br>
                    <input type='radio' name='accion' value='carpeta'>
                    Carpeta
                    <br>
                    </label><br>
                    <label>Nombre de la carpeta o arhivo:
                    <input name='nombre_arch'/>
                    </label><br>
                    <label>Nuevo nombre de la carpeta o arhivo:
                    <input name='nombre_nue'/>
                    </label><br>
                    <input type='submit' value='RENOMBRAR'/><br>
                  </form>
             </div>
               <form action='./exit.php' method='post' target='_self'>
               <div id='centro1'><input type='submit' value='SALIR'/><br></div>
               </form>
        </body>
        ";
     }

     if ($_SESSION["opcion"] == "crear"){
           return crear();
     }      
     else{ 
          if ($_SESSION["opcion"] == "renombrar"){
               return renombrar();
          }
          else{ 
               if ($_SESSION["opcion"] == "eliminar"){
                    return eliminar();
               }      
          } 
     }        
?>
