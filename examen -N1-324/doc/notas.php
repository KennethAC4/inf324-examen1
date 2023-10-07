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

                            <?php                            
                             require 'bd/conexionpostgres.php';


                             $query="select 
                                    avg(CASE when pe.departamento = 'La Paz' then promedio end) LPZ,
                                    avg(CASE when pe.departamento = 'Cochabamba' then promedio end) CBB,
                                    avg(CASE when pe.departamento = 'Santa Cruz' then promedio end) SCZ,
                                    avg(CASE when pe.departamento = 'Pando' then promedio end) PD,
                                    avg(CASE when pe.departamento = 'Beni' then promedio end) BN,
                                    avg(CASE when pe.departamento = 'Sucre' then promedio end) SC,
                                    avg(CASE when pe.departamento = 'Oruro' then promedio end) ORU,
                                    avg(CASE when pe.departamento = 'Potosi' then promedio end) PO,
                                    avg(CASE when pe.departamento = 'Tarija' then promedio end) TJ
                                    from persona as pe,estudiante as e
                                    where e.ci = pe.ci";
                             $consulta = pg_query($conexion,$query);
                             $obj=pg_fetch_object($consulta);
                             
                                                       
                            ?>
                            <tr>
                                <?php if(!is_null($obj->lpz)) {echo "<th>La Paz</th>";}?>
                                <?php if(!is_null($obj->cbb)) {echo "<th>Cochabamba</th>";}?>
                                <?php if(!is_null($obj->scz)) {echo "<th>Santa Cruz</th>";}?>                                
                                <?php if(!is_null($obj->pd)) {echo "<th>Pando</th>";}?>
                                <?php if(!is_null($obj->bn)) {echo "<th>Beni</th>";}?>
                                <?php if(!is_null($obj->sc)) {echo "<th>Sucre</th>";}?>
                                <?php if(!is_null($obj->oru)) {echo "<th>Oruro</th>";}?>                                
                                <?php if(!is_null($obj->po)) {echo "<th>Potosi</th>";}?>
                                <?php if(!is_null($obj->tj)) {echo "<th>Tarija</th>";}?>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>  
                                
                                <?php if(!is_null($obj->lpz)) {echo "<td><center>".round($obj->lpz,2)."</center></td>";}?>
                                <?php if(!is_null($obj->cbb)) {echo "<td><center>".round($obj->cbb,2)."</center></td>";}?>
                                <?php if(!is_null($obj->scz)) {echo "<td><center>".round($obj->scz,2)."</center></td>";}?>                              
                                <?php if(!is_null($obj->pd)) {echo "<td><center>".round($obj->pd,2)."</center></td>";}?>
                                <?php if(!is_null($obj->bn)) {echo "<td><center>".round($obj->bn,2)."</center></td>";}?>
                                <?php if(!is_null($obj->sc)) {echo "<td><center>".round($obj->sc,2)."</center></td>";}?>
                                <?php if(!is_null($obj->oru)) {echo "<td><center>".round($obj->oru,2)."</center></td>";}?>                               
                                <?php if(!is_null($obj->po)) {echo "<td><center>".round($obj->po,2)."</center></td>";}?>
                                <?php if(!is_null($obj->tj)) {echo "<td><center>".round($obj->tj,2)."</center></td>";}?>
                            </tr>
                            <?php
                                
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