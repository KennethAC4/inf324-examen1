<?php 

include 'bd/conexionpostgres.php';

session_start();

//datos persona
$id_c=$_SESSION['id_c'];
$cic=$_SESSION['carnet'];

$ci= $_POST['ci'];
$ciudad=$_POST['departamento'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['genero'];
$telefono=$_POST['fecha'];

//datos usuario

$usuario=$_POST['usuario'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$color=$_POST['color'];      

if($cic!=$ci){
        $sql = "INSERT into persona(ci,departamento,nombre,paterno,materno,genero,fechanac)values('$ci','$ciudad','$nombre','$paterno','$materno','$direccion','$telefono')";		
        pg_query($conexion,$sql);
        
        $sql = "DELETE from persona where ci='$cic'";
        pg_query($conexion,$sql);
}else{

        $sql = "UPDATE persona SET departamento='$ciudad', nombre='$nombre',paterno='$paterno',materno='$materno',genero='$direccion',fechanac='$telefono' WHERE ci='$cic' ";		
        pg_query($conexion,$sql);   
}

$sql = "UPDATE estudiante SET usuario='$usuario', email='$email', contraseña='$contraseña', color='$color', ci='$ci' WHERE matricula='$id_c' ";		
        pg_query($conexion,$sql);  

header("location: cuenta.php");
   

?>