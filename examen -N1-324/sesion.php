<?php

require 'base_datos/conexionpostgres.php';
session_start();

$correo=$_POST['email'];
$contraseña=$_POST['password'];

$query="select * from estudiante where email='$correo' AND contraseña='$contraseña'";
$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);

if($cantidad>0){
    $_SESSION['email']=$correo;
    $_SESSION['password']=$contraseña;
    header("location: uc/usuariocliente.php");
}else{
    $query="select * from docente where email='$correo' AND contraseña='$contraseña'";
    $consulta=pg_query($conexion,$query);
    $cantidad=pg_num_rows($consulta);

    if($cantidad>0){
        $_SESSION['email']=$correo;
        $_SESSION['password']=$contraseña;
        header("location: doc/docente.php");
    }else{
        $query="select * from administrador where email='$correo' AND contraseña='$contraseña'";
        $consulta=pg_query($conexion,$query);
        $cantidad=pg_num_rows($consulta);

        if($cantidad>0){
            $_SESSION['email']=$correo;
            $_SESSION['password']=$contraseña;
            header("location: su/superusuario.php");
        }else{
            $_SESSION['datos']=$correo;
            header("location: login.php");
        }
    }
}   

?>