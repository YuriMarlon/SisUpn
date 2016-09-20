<?php
function generaSelect()
{
include '../../php/conexion.php';
$query = "SELECT DISTINCT(departamentos) FROM ubicacion ";
$result = $con->query($query);
// Voy imprimiendo el primer select compuesto por los paises
    echo "<select class='form-control' name='departamentos' id='departamentos'>";
    echo "<option value='0'>--Seleccionar--</option>";
    $cont=1; 
     while ( $row = $result->fetch_array())    
    {          
         echo '<option value="'.$row['departamentos'].'">'.$row['departamentos'].'</option>';
         $cont++;
    }    
	echo "</select>";
}
?>


<div class="form-group">
    <label for="dep_nombre">Departamento</label>
    <?php generaSelect(); ?>
</div>
<div class="form-group">
    <label for="dep_provincia">Provincia</label>
    <select class='form-control' name="provincias" id="provincias">
        <option value="0">--Seleccionar--</option>
    </select>
</div>
<div class="form-group">
    <label for="dep_distrito">Distrito</label>
    <select class='form-control' name="distritos" id="distritos">
        <option value="0">--Seleccionar--</option>
    </select>
</div>
    
    
   
