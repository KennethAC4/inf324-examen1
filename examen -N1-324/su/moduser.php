<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<div class="container">
    <h1>Estudiantes</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">              
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Matricula</th>
                                <th>Usuario</th>
                                <th>Correo</th>                                
                                <th>contraseña</th>  
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                             require 'bd/conexionpostgres.php';


                             $query="SELECT * from estudiante";
                             $consulta = pg_query($conexion,$query);

                            while($obj=pg_fetch_object($consulta)){                                                        
                            ?>
                            <tr>
                                <td><center><?php echo $obj->matricula."<br>"; ?></center></td>
                                <td><center><?php echo $obj->usuario."<br>"; ?></center></td>
                                <td><center><?php echo $obj->email."<br>"; ?></center></td>
                                <td><center><?php echo $obj->contraseña."<br>"; ?></center></td>    
                                
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
</div>

</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>