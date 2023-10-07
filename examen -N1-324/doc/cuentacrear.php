<?php 

include 'bd/conexionpostgres.php';

session_start();

//datos persona
$id_c=$_SESSION['id_c'];

$ci= $_POST['ci'];
$ciudad=$_POST['departamento'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['genero'];
$telefono=$_POST['fecha'];
$color=$_POST['color'];  

//datos usuario

$usuario=$_POST['usuario'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

$sql = "INSERT into persona(ci,departamento,nombre,paterno,materno,genero,fechanac)values('$ci','$ciudad','$nombre','$paterno','$materno','$direccion','$telefono')";		
        pg_query($conexion,$sql); 

$sql = "UPDATE docente SET usuario='$usuario', email='$email', contraseña='$contraseña', color='$color',ci='$ci' WHERE id_doc='$id_c' ";		
        pg_query($conexion,$sql);  

header("location: cuenta.php");
   

?>