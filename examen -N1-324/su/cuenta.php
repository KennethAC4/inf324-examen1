<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
<body>

<?php 

require 'bd/conexionpostgres.php';

$correo=$_SESSION['email'];
$contraseña=$_SESSION['password'];

$query="SELECT ci
        from administrador where email='$correo' and contraseña='$contraseña'";
      
$consulta=pg_query($conexion,$query);

$obj=pg_fetch_object($consulta);
$ci=$obj->ci;
   
if(!empty($ci)){

    $query="SELECT * from administrador where email='$correo' and contraseña='$contraseña'";
    $consulta=pg_query($conexion,$query);

    $objc=pg_fetch_object($consulta);
    $cic=$objc->ci;
    $_SESSION['carnet']=$cic;

    $query="SELECT * from persona where ci='$cic'";
    $consulta=pg_query($conexion,$query);

    $objp=pg_fetch_object($consulta);

    $id_c=$objc->id_admin;
    $_SESSION['id_c']=$id_c;

?>

<h1>Editar perfil</h1>   
    <form action="cuentaact.php" method="post">
        <section class="form-datos">
        <FONT COLOR="black"><label>ci:</label></font>
        <input type="text" name="ci" value="<?php echo $objp->ci; ?>" ><br>
        <FONT COLOR="black"><label>ciudad:</label></font>
        <input type="text" list="ubicaciones" name="departamento" value="<?php echo $objp->departamento; ?>"><br>
            <datalist id="ubicaciones">
                    <option >La Paz</option>
                    <option >Cochabamba</option>
                    <option >Santa Cruz</option>
                    <option >Pando</option>
                    <option >Beni</option>
                    <option >Sucre</option>
                    <option >Oruro</option>
                    <option >Potosi</option>
                    <option >Tarija</option>
            </datalist>
        <FONT COLOR="black"><label>nombre:</label></font>
        <input type="text" name="nombre" value="<?php echo $objp->nombre; ?>"><br>
        <FONT COLOR="black"><label>Apellido Paterno:</label></font>
        <input type="text" name="paterno" value="<?php echo $objp->paterno; ?>"><br>
        <FONT COLOR="black"><label>Apellido Materno:</label></font>
        <input type="text" name="materno" value="<?php echo $objp->materno; ?>"><br>
        <FONT COLOR="black"><label>Genero:</label></font>
        <input type="text" name="genero" value="<?php echo $objp->genero; ?>"><br>
        <FONT COLOR="black"><label>Fecha de nacimiento:</label></font>
        <input type="date" name="fecha" value="<?php echo $objp->fechanac; ?>" ><br>
        
        <!--datos usaurio cliente-->
        
        <FONT COLOR="black"><label>Usuario:</label></font>
        <input type="text" name="usuario" value="<?php echo $objc->usuario  ; ?>"><br>
        <FONT COLOR="black"><label>Email:</label></font>
        <input type="text" name="email" value="<?php echo $objc->email; ?>"><br>
        <FONT COLOR="black"><label>Contraseña:</label></font>
        <input type="password" name="contraseña" value="<?php echo $objc->contraseña; ?>"><br>
        <FONT COLOR="black"><label>Color Vista:</label></font>
        <input type="color" name="color" value="<?php echo $objc->color; ?>" ><br>
        
        <input type="submit" class="submit" value="Guardar">
        </section>

<?php
}else{

    $query="SELECT * from administrador where email='$correo' and contraseña='$contraseña'";
    $consulta=pg_query($conexion,$query);

    $objc=pg_fetch_object($consulta);
    $id_c=$objc->id_admin;
    $_SESSION['id_c']=$id_c;

?>

<h1>Editar perfil</h1>   
    <form action="cuentacrear.php" method="post">
        <section class="form-datos">
        <FONT COLOR="black"><label>ci:</label></font>
        <input type="text" name="ci" ><br>
        <FONT COLOR="black"><label>ciudad:</label></font>
        <input type="text" list="ubicaciones" name="departamento"><br>
            <datalist id="ubicaciones">
                    <option >La Paz</option>
                    <option >Cochabamba</option>
                    <option >Santa Cruz</option>
                    <option >Pando</option>
                    <option >Beni</option>
                    <option >Sucre</option>
                    <option >Oruro</option>
                    <option >Potosi</option>
                    <option >Tarija</option>
            </datalist>
        <FONT COLOR="black"><label>nombre:</label></font>
        <input type="text" name="nombre"><br>
        <FONT COLOR="black"><label>Apellido Paterno:</label></font>
        <input type="text" name="paterno"><br>
        <FONT COLOR="black"><label>Apellido Materno:</label></font>
        <input type="text" name="materno"><br>
        <FONT COLOR="black"><label>Genero:</label></font>
        <input type="text" name="genero"><br>
        <FONT COLOR="black"><label>Fecha de nacimiento:</label></font>
        <input type="date" name="fecha" value = "2000-01-01"><br>
        
        <!--datos usaurio cliente-->
        
        <FONT COLOR="black"><label>Usuario:</label></font>
        <input type="text" name="usuario" value="<?php echo $objc->usuario  ; ?>"><br>
        <FONT COLOR="black"><label>Email:</label></font>
        <input type="text" name="email" value="<?php echo $objc->email; ?>"><br>
        <FONT COLOR="black"><label>Contraseña:</label></font>
        <input type="password" name="contraseña" value="<?php echo $objc->contraseña; ?>"><br>
        <FONT COLOR="black"><label>Color Vista:</label></font>
        <input type="color" name="color" value="<?php echo $objc->color; ?>"><br>
        
        <input type="submit" class="submit" value="Guardar">
        </section>
    </form>

<?php
}
?>
</form>
    <style>
        .form-datos label{
        width: 15%;
        padding: 5px;
        }
        .form-datos .submit{
        width: 15%;
        padding: 10px;
        color: #fff;
        background: #0098cb;
        font-size: 12px;
        margin: 20px auto;
        margin-top: 0;
        border: 0;
        border-radius: 3px;
        cursor: pointer;
        }
  
        .form-datos .submit:hover{
        background-color: #00b8eb;
        }
        .form-datos .subirfoto{
        background-color: #00b8eb;
        }
    </style>
</body>
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>