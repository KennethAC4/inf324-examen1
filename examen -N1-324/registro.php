<?php 

include 'base_datos\conexionpostgres.php';

session_start();

$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
$correo=$_POST['email'];

$sql="insert into estudiante(usuario,contraseña,email)values('$usuario','$contraseña','$correo')";
pg_query($conexion,$sql);
header("location: login.php");

?>