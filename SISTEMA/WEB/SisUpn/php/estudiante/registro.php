<?php
include "../conexion.php";
$found = false;
$sql1 = "select * from usuario where usu_nombre=\"$_POST[est_codigo]\" ";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) {
    $found = true;
    break;
}
$departamentos= mysql_real_escape_string($_POST['departamentos']);
$provincias= mysql_real_escape_string($_POST['provincias']);
$distritos= mysql_real_escape_string($_POST['distritos']);
$genero= mysql_real_escape_string($_POST['genero']);
$per_dni=mysql_real_escape_string($_POST['per_dni']);
$per_nombres=mysql_real_escape_string($_POST['per_nombres']);
$per_appaterno=mysql_real_escape_string($_POST['per_appaterno']);
$per_apmaterno=mysql_real_escape_string($_POST['per_apmaterno']);
$per_correo=mysql_real_escape_string($_POST['per_correo']);
$per_urbanizacion=mysql_real_escape_string($_POST['per_urbanizacion']);
$per_direccion=mysql_real_escape_string($_POST['per_direccion']);
$per_fcnacimiento=mysql_real_escape_string($_POST['per_fcnacimiento']);

$est_codigo=mysql_real_escape_string($_POST['est_codigo']);

$cs_ubicacion="SELECT ubi_id FROM ubicacion WHERE departamentos='".$departamentos."' and provincias='".$provincias."' and distritos='".$distritos."'";
$rs_ubicacion = $con->query($cs_ubicacion);
$ubi_id='';
while ( $row = $rs_ubicacion->fetch_array())    
    {          
         $ubi_id=$row['ubi_id'];
    }   
if ($found) {
    print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../../interfaz/estudiante/registro.php';</script>";
}

$cs_persona = "insert into persona(per_dni,per_nombres,per_appaterno,per_apmaterno,per_correo,per_fcnacimiento,per_fcregistro,per_fcactualizacion,per_validado,per_genero,ubi_id,per_urbanizacion,per_direccion) "
        . "values('".$per_dni."','".$per_nombres."','".$per_appaterno."','".$per_apmaterno."','".$per_correo."','".$per_fcnacimiento."',now(),now(), 0 ,'".$genero."','".$ubi_id."','".$per_urbanizacion."','".$per_direccion."') ";
        
$rs_persona = $con->query($cs_persona);
if ($rs_persona != null) {
    
    $cs_usuario="insert into usuario(usu_id,usu_nombre,usu_clave,tusu_id,per_dni) values('usu".$per_dni."','".$est_codigo."','".$est_codigo."','tusu000002','".$per_dni."')";
    $rs_usuario=$con->query($cs_usuario);
    if($rs_usuario = null){
        print "<script>alert(\"Error de usuario. Proceda a logearse\");window.location='../../login.php';</script>";
    }
    $cs_estudiante="insert into estudiante(est_codigo,est_anoegreso,est_anoingreso,per_dni,est_semestreegreso,est_semestreingreso) values('".$est_codigo."','0','0','".$per_dni."','0','0')";
    $rs_estudiante=$con->query($cs_estudiante);
    if($rs_estudiante = null){
        print "<script>alert(\"Error de estudiante. Proceda a logearse\");window.location='../../login.php';</script>";
    }
    print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../../login.php';</script>";
    
    
}  else {
    print "<script>alert(\"Error al logearse\");window.location='../../interfaz/estudiante/registro.php';</script>";
}

?>