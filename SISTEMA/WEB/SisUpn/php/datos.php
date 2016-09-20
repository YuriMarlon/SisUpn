<?php 
	include('../../php/conexion.php');
	$Accion=$_REQUEST['Accion'];
	if(is_callable($Accion)){
		$Accion();
	}
	function GetDepartamentos(){
		header('Content-Type:aplication/json');
		$Departamentos=array();
		$Consulta=mysql_query("select * from upn_departamentos");
		while ($Fila=mysql_fetch_assoc($Consulta)) {
			$Departamentos[]=$Fila;
		}
		echo json_encode($Departamentos);
	}
	function GetProvincias(){
		header('Content-Type:aplication/json');
		$Provincias=array();
		$Consulta=mysql_query("select * from upn_provincias where idDepartamento= ".$_REQUEST['idDepartamento']);
		while ($Fila=mysql_fetch_assoc($Consulta)) {
			$Provincias[]=$Fila;
		}
		echo json_encode($Provincias);
	}
	function GetDistritos(){
		header('Content-Type:aplication/json');
		$Departamentos=array();
		$Consulta=mysql_query("select * from upn_distritos where idProvincia= ".$_REQUEST['idProvincia']);
		while ($Fila=mysql_fetch_assoc($Consulta)) {
			$Departamentos[]=$Fila;
		}
		echo json_encode($Departamentos);
	}  

?>