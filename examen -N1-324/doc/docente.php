<?php
require_once "vistas/parte_superior.php"
?>
<!---INICIO del cont principal--->
<?php 

$correo=$_SESSION['email'];
$contraseña=$_SESSION['password'];

$query="SELECT * from docente where email='$correo' and contraseña='$contraseña'";
    
        $consulta=pg_query($conexion,$query);

        $objc=pg_fetch_object($consulta);
        $_SESSION['id_doc']=$objc->id_doc;        //id usuariocliente

?>
<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<div class="banner">
      <div class="banner__content">
        <div class="container">
          <h2 class="banner__title"></h2>
          <p class="banner__txt">Modulo Docente</p>
        </div>
      </div>
    </div>
    <main class="main">
      <section class="welcome">
        <h2 class="section__title">Pregunta 3 y 4</h2>
        <p class="welcome__txt">Permita el ingreso a docentes, podrá configurar el color que desee. 
          Con el rol DOCENTE podrá visualizar por departamento la media de notas 
          usando case when. Cada departamento es una columna.</p>
      </section>
    </main>

<!---FIN del cont principal--->
<?php
require_once "vistas/parte_inferior.php"
?>