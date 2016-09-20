<?php

include "conexion.php";
$sql1= "SELECT  FROM usuario u JOIN tipo_usuario t ON u.tusu_id=t.tusu_id WHERE u.usu_nombre=\"$_POST[username]\" and u.usu_clave=\"$_POST[password]\" ";
$query = $con->query($sql1);
while ($r=$query->fetch_array()) {
    $user_id=$r["usu_id"];
    $user_idTipoUsuario=$r["tusu_nombre"];                
    break;
}

?>
