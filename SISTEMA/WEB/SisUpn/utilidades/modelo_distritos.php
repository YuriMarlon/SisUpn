<?php

include '../php/conexion.php';
$options = "<option value='0'>--Seleccionar--</option>";
$query = "SELECT DISTINCT(distritos) FROM ubicacion WHERE distritos != '' and provincias='" . $_POST["elegido"] . "'";
$result = $con->query($query);
// Voy imprimiendo el primer select compuesto por los paises
while ($row = $result->fetch_array()) {
    $options = $options . '<option value="' . $row['distritos'] . '">' . $row['distritos'] . '</option>';
}
echo $options;
?>

