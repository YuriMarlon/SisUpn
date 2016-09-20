<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
                        $user_TipoUsuario=null;
                        $user_nombre;
			$sql1= "SELECT t.tusu_nombre,u.usu_id FROM usuario u JOIN tipo_usuario t ON u.tusu_id=t.tusu_id WHERE u.usu_nombre=\"$_POST[username]\" and u.usu_clave=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["usu_id"];
                                $user_idTipoUsuario=$r["tusu_nombre"];                
                                break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
                                $_SESSION["user_tipo"]=$user_idTipoUsuario;
                                if($user_idTipoUsuario=='Administrativo'){
                                    print "<script>window.location='../interfaz/administrador/ver.php';</script>";
                                }
                                if($user_idTipoUsuario=='Docente'){
                                    print "<script>window.location='../interfaz/docente/ver.php';</script>";
                                }
                                if($user_idTipoUsuario=='Estudiante'){
                                    print "<script>window.location='../interfaz/estudiante/inicio.php';</script>";
                                }else{
                                    print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
                                }
								
			}
		}
	}
}



?>