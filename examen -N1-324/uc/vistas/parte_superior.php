<?php
              session_start();
              require 'bd/conexionpostgres.php';

?>  

<!DOCTYPE html>
<html lang="en">

  <!-- Custom styles for this template-->
<head>
<link rel="stylesheet" href=" ../css/estiloinicio1.css">

<link href="css/sb-admin-2.min.css" rel="stylesheet">



  <meta charset="UTF-8">
  <meta name="viewport" 
  content="width=device-width, 
  initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" 
  content="ie=edge">
 
  <link href="https://fonts.googleapis.com/
  css?family=Roboto" rel="stylesheet">
  
  <link rel="stylesheet" href="https://
  use.fontawesome.com/releases/v5.7.2/css/all.css" 
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUSt
  jsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
  crossorigin="anonymous">
   
   
    <title>KFAR ES</title>
  </head>
<body>
    <header class="main-header" style="background-color: <?php

                                    $correo=$_SESSION['email'];
                                    $contraseña=$_SESSION['password'];

                                    $query="SELECT color from estudiante WHERE email='$correo' and  contraseña='$contraseña'";
                                    $consulta = pg_query($conexion,$query);

                                    if(pg_num_rows($consulta)>0){

                                      $obj=pg_fetch_object($consulta);
                                      echo $obj->color;

                                    } 

                                    ?> "  >
      <div class="container container--flex">
        <a href="usuariocliente.php"><h1 class="main-title"><span class="color-span">KF</span>AR</h1></a>
        <nav class="main-nav">
          <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
          <ul class="menu" id="menu">
          <li class="menu__item"><a href="" class="menu__link"><span>informacion</span></a>
              <ul class="submenu">
                <li ><a href="http://www.informatica.edu.bo/"><span>Carrera informatica</span></a></li>
                <li ><a href="http://informatica.umsa.bo/kardex/"><span>Kardex</span></a></li>
                <li ><a href="https://www.umsa.bo/institutos"><span>instituto de investigacion</span></a></li>
					    </ul>
            </li>
            <li class="menu__item"><a href="https://t.me/Fabri_ac4" class="menu__link"><span>Contacto</span></a></li>
            <li class="menu__item">
                <a href="" class="menu__link">
                <span>
                
                <?php

              $correo=$_SESSION['email'];
              $contraseña=$_SESSION['password'];

              $query="SELECT usuario from estudiante WHERE email='$correo' and  contraseña='$contraseña'";
              $consulta = pg_query($conexion,$query);

              if(pg_num_rows($consulta)>0){

                $obj=pg_fetch_object($consulta);
                echo $obj->usuario."<br>";
              
              } 

            ?>      

              </span>
              </a>
              <ul class="submenu">
						    <li><a href="cuenta.php">Perfil</a></li>
						    <li><a href="../cerrar.php">Cerrar sesion</a></li>
					    </ul>
            </li>
            <div class="nav-social">
              <a href="" class="nav-social__item"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="nav-social__item"><i class="fab fa-twitter"></i></a>
              <a href="" class="nav-social__item"><i class="fab fa-dribbble"></i></a>
            </div>
          </ul>
        </nav>
      </div>
    </header>
    <script type="text/javascript" src="http://localhost/examen-N1-324/menu.js"></script>  
</body>
</html>
