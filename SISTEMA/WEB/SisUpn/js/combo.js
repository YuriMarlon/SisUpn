$(document).ready(function(){
	$.ajax({
		url:'../../php/datos.php?Accion=GetDepartamentos',
		success:function(Datos){
			for(x=0;x<Datos.length;x++){
				$("#CboDepartamentos").append(new Option(Datos[x].nombre,Datos[x].id));
				$idDepartamento=Datos[x].id;
			}
		}
	})
	$('#CboDepartamentos').change(function(){
		$('#CboProvincias,#CboDistritos').empty();
		$.getJSON('../../php/datos.php',{Accion:'GetProvincias',idDepartamento:$('#CboDepartamentos option:selected').val()},function(Datos){
			for(x=0;x<Datos.length;x++){
				$("#CboProvincias").append(new Option(Datos[x].nombre,Datos[x].id));
				$idProvincia=Datos[x].id;
			}
		})
	} );
	$('#CboProvincias').change(function(){
		$('#CboDistritos').empty();
		$.getJSON('../../php/datos.php',{Accion:'GetDistritos',idProvincia:$('#CboProvincias option:selected').val()},function(Datos){
			for(x=0;x<Datos.length;x++){
				$("#CboDistritos").append(new Option(Datos[x].nombre,Datos[x].id));
				$idDistrito=Datos[x].id;
			}
		})
	} );
        });