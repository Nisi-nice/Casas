<?php
     session_start();
     $_SESSION["boton"] = (isset($_POST["boton"]) && $_POST["boton"] != "")? $_POST["boton"] : false;
     $_SESSION["nombre"] = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
     $_SESSION["nombre_arch"] = (isset($_POST["nombre_arch"]) && $_POST["nombre_arch"] != "")? $_POST["nombre_arch"] : false;
     $_SESSION["nombre_nue"]=(isset($_POST["nombre_nue"]) && $_POST["nombre_nue"] !="")? $_POST["nombre_nue"] : "Sin llenar";
     $_SESSION["opcion"] = (isset($_POST["opcion"]) && $_POST["opcion"] != "")? $_POST["opcion"] : false;

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
                    <input type='radio' name='opcion' checked value='archivo'>
                    Archivo
                    <br>
                    <input type='radio' name='opcion' value='carpeta'>
                    Carpeta
                    <br>
                    </label><br>
                    <label>Nombre de tu carpeta o arhivo:
                    <input name='nombre_arch'/>
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
                    <form action='./eliminar.php' method='post' target='_self'>
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
                    <input name='nombre_arch'/>
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
                    <form action='./renombrar.php' method='post' target='_self'>
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
                    <input name='nombre_arch'/>
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
