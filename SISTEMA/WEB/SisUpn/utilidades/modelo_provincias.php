<?php

include '../php/conexion.php';
$options = "<option value='0'>--Seleccionar--</option>";
$query = "SELECT DISTINCT(provincias) FROM ubicacion WHERE provincias != '' and departamentos='" . $_POST["elegido"] . "'";
$result = $con->query($query);
// Voy imprimiendo el primer select compuesto por los paises

while ($row = $result->fetch_array()) {
    $options = $options . '<option value="' . $row['provincias'] . '">' . $row['provincias'] . '</option>';
   
}
echo $options;
?>