<?php

if(!empty($_POST)){
	if(isset($_POST["nombres"]) &&isset($_POST["ap_paterno"]) &&isset($_POST["ap_materno"]) &&isset($_POST["genero"]) &&isset($_POST["celular"])){
		if($_POST["nombres"]!=""&& $_POST["ap_paterno"]!=""&&$_POST["ap_materno"]!=""){
			include "../conexion.php";		
			$sql = "update upn_usuarios set nombres=\"$_POST[nombres]\",ap_paterno=\"$_POST[ap_paterno]\",ap_materno=\"$_POST[ap_materno]\",genero=\"$_POST[genero]\",celular=\"$_POST[celular]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../../interfaz/estudiante/editar.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../../interfaz/estudiante/editar.php';</script>";
			}
		}
	}
}



?>