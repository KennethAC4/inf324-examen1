<?php
    include "conexion.inc.php";

    
    if(isset($_GET["bandera"])){
        
        $bandera = "adicionar";
        $ci = "";
        $nombre = "";
        $paterno = "";
    }
    else{
        
        $bandera = "modificar";
        $ci = $_GET["ci"];
        $resultado = mysqli_query($con, "select * from alumnos where ci = '$ci'");
        $registro = mysqli_fetch_array($resultado);
        $ci = $registro['ci'];
        $nombre = $registro['nombre'];
        $paterno = $registro['paterno'];
    }

?>

<form action = "modificarLogica.php" method = "GET">
    <input type="hidden" name = "bandera" value = "<?php echo $bandera?>"/>
    ci
    <input type="text" <?php if($bandera=="modificar") echo 'readonly = "readonly"'?> name = "ci" value = "<?php echo $ci?>">
    <br/>
    nombre
    <input type="text" name = "nombre" value = "<?php echo $nombre?>">
    <br/>
    Paterno
    <input type="text" name = "paterno" value = "<?php echo $paterno?>">
    <br/>
    <input type="submit" value = "Aceptar" name = "Aceptar">
    <input type="submit" value = "Cancelar" name = "Cancelar">
</form>