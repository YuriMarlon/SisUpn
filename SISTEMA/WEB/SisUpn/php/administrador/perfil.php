<?php
include "../../php/conexion.php";

$user_id=null;
$sql1= "select * from upn_usuarios where id = ".$_SESSION["user_id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if ($person != null): ?>

    <form role="form" method="post" action="../../php/estudiante/actualizar.php" >
        <div class="container" style="padding: 0px">
            <div class="row">
                <div class="span4">
                    <div class="hero-unit">
                        <h2 class="le-mis-alertas">Datos del Alumno</h2>
                        <div class="alert alert-info">                        
                            <span id="cp2_Label3"><strong>Recuerda</strong>: El cambio de nombres y apellidos debe hacerse a través de Secretaría Académica, siguiendo el procedimiento definido para ello.</span>
                        </div>                  
                        <div class="dvDatos">
                            <div class="AspNet-DetailsView">
                                <div class="AspNet-DetailsView-Data">
                                    <ul>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Código</span><span class="AspNet-DetailsView-Value"><?php echo $person->codigo_upn; ?></span>
                                        </li>
                                        <li class="AspNet-DetailsView-Alternate">
                                            <span class="AspNet-DetailsView-Name">Apellidos y nombres</span><span class="AspNet-DetailsView-Value"><?php echo $person->ap_paterno." ".$person->ap_materno." , ".$person->nombres; ?></span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Carrera</span><span class="AspNet-DetailsView-Value">INGENIERIA DE SISTEMAS COMPUTACIONALES</span>
                                        </li>
                                        <li class="AspNet-DetailsView-Alternate">
                                            <span class="AspNet-DetailsView-Name">Semestre de ingreso</span><span class="AspNet-DetailsView-Value"><?php echo $person->ingreso." - ".$person->semestre; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dvDatos">
                            <div class="AspNet-DetailsView">
                                <div class="AspNet-DetailsView-Data">
                                    <ul>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Fecha de nacimiento</span>
                                            <span class="AspNet-DetailsView-Value">
                                                <input name="ctl00$cp2$txtFechaNac" type="text" value='<?php echo $person->fecha_nacimiento; ?>' id="" class="textboxSmall input50">
                                                <input type="hidden" name="ctl00$cp2$mskFechaNac_ClientState" id="cp2_mskFechaNac_ClientState">
                                                
                                            </span>
                                        </li>
                                        <li class="AspNet-DetailsView-Alternate">
                                            <span class="AspNet-DetailsView-Name">Documento de identidad</span>
                                            <span class="AspNet-DetailsView-Value">
                                                <input name="ctl00$cp2$txtDNI" type="text" value='<?php echo $person->dni; ?>' id="" class="textboxSmall input50">
                                                <input type="hidden" name="ctl00$cp2$mskDNI_ClientState" id="cp2_mskDNI_ClientState">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="hero-unit">
                        <h2 class="le-mis-alertas">Datos de Contacto Locales</h2>
                        <div class="alert alert-info">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span id="cp2_Label1">Ingresa tus datos de contacto, de acuerdo a la localidad del Campus UPN donde actualmente vienes asistiendo.</span>
                        </div>
                        <div class="dvDatos">
                            <div class="AspNet-DetailsView">
                                <div class="AspNet-DetailsView-Data">
                                    <ul>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Departamento</span>
                                            <span class="AspNet-DetailsView-Value">
                                                <select name="" onchange="" id="cp2_ddlDepartamento">
                                                    <option value="01">AMAZONAS</option>
                                                    <option value="02">ANCASH</option>
                                                    <option value="03">APURIMAC</option>
                                                    <option value="04">AREQUIPA</option>
                                                    <option value="05">AYACUCHO</option>
                                                    <option value="06">CAJAMARCA</option>
                                                    <option value="07">CUSCO</option>
                                                    <option value="08">HUANCAVELICA</option>
                                                    <option value="09">HUANUCO</option>
                                                    <option value="10">ICA</option>
                                                    <option value="11">JUNIN</option>
                                                    <option selected="selected" value="12">LA LIBERTAD</option>
                                                    <option value="13">LAMBAYEQUE</option>
                                                    <option value="14">LIMA</option>
                                                    <option value="15">LORETO</option>
                                                    <option value="16">MADRE DE DIOS</option>
                                                    <option value="17">MOQUEGUA</option>
                                                    <option value="18">PASCO</option>
                                                    <option value="19">PIURA</option>
                                                    <option value="20">PUNO</option>
                                                    <option value="21">SAN MARTIN</option>
                                                    <option value="22">TACNA</option>
                                                    <option value="23">TUMBES</option>
                                                    <option value="24">CALLAO</option>
                                                    <option value="25">UCAYALI</option>
                                                    <option value="99">- SIN ESPECIFICAR -</option>

                                                </select>

                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Provincia</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <select name="ctl00$cp2$ddlProvincia" onchange="javascript:setTimeout('__doPostBack(\'ctl00$cp2$ddlProvincia\',\'\')', 0)" id="cp2_ddlProvincia">
                                                    <option selected="selected" value="01">TRUJILLO</option>
                                                    <option value="02">BOLIVAR</option>
                                                    <option value="03">SANCHEZ CARRION</option>
                                                    <option value="04">OTUZCO</option>
                                                    <option value="05">PACASMAYO</option>
                                                    <option value="06">PATAZ</option>
                                                    <option value="07">SANTIAGO DE CHUCO</option>
                                                    <option value="08">ASCOPE</option>
                                                    <option value="09">CHEPEN</option>
                                                    <option value="10">JULCAN</option>
                                                    <option value="11">GRAN CHIMU</option>
                                                    <option value="12">VIRU</option>

                                                </select>                    

                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Distrito</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <select name="ctl00$cp2$ddlDistrito" id="cp2_ddlDistrito">
                                                    <option selected="selected" value="01">TRUJILLO</option>
                                                    <option value="02">HUANCHACO</option>
                                                    <option value="03">LAREDO</option>
                                                    <option value="04">MOCHE</option>
                                                    <option value="05">SALAVERRY</option>
                                                    <option value="06">SIMBAL</option>
                                                    <option value="07">VICTOR LARCO HERRERA</option>
                                                    <option value="09">POROTO</option>
                                                    <option value="10">EL PORVENIR</option>
                                                    <option value="11">LA ESPERANZA</option>
                                                    <option value="12">FLORENCIA DE MORA</option>

                                                </select>

                                            </span>
                                        </li>	
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Urbanización / Barrio</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtUrbanizacion" type="text" value="ARANJUEZ" id="cp2_txtUrbanizacion" class="textboxSmall">
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Dirección</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <textarea name="ctl00$cp2$txtDireccion" rows="2" cols="20" id="cp2_txtDireccion" class="textboxSmall">
                NAPO #291</textarea>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Teléfono de casa</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtTeleFijo" type="text" id="cp2_txtTeleFijo" class="textboxSmall input50">
                                                <input type="hidden" name="ctl00$cp2$mskTeleFijo_ClientState" id="cp2_mskTeleFijo_ClientState">
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Teléfono de oficina</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtTeleOficina" type="text" id="cp2_txtTeleOficina" class="textboxSmall input50">
                                                <input type="hidden" name="ctl00$cp2$mskTeleOficina_ClientState" id="cp2_mskTeleOficina_ClientState">
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Celular</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtTeleMovil" type="text" value="972032045" id="cp2_txtTeleMovil" class="textboxSmall input50">
                                                <input type="hidden" name="ctl00$cp2$mskTeleMovil_ClientState" id="cp2_mskTeleMovil_ClientState">
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Celular RPC</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtRPC" type="text" maxlength="12" id="cp2_txtRPC" class="textboxSmall input50">

                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Celular RPM</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtRPM" type="text" value="#949422273" maxlength="12" id="cp2_txtRPM" class="textboxSmall input50">

                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Celular NEXTEL</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtNextel" type="text" maxlength="12" id="cp2_txtNextel" class="textboxSmall input50">

                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Correo electrónico</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtEMail" type="text" value="yuriangulosaldana@gmail.com" id="cp2_txtEMail" class="textboxSmall">

                                                <span id="cp2_rfvEmail" style="color:Red;visibility:hidden;">(*)</span>
                                                <span id="cp2_revEmail" style="color:Red;visibility:hidden;">(*)</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="hero-unit">
                        <h2 class="le-mis-alertas">Datos de Contacto en Lugar de Origen</h2>
                        <div class="alert alert-info">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span id="cp2_Label41">Si provienes de un lugar diferente a la localidad del Campus UPN donde actualmente asistes, ingresa tus datos de contacto de tu lugar de origen.</span>
                        </div>                                                       
                        <div class="dvDatos">                    
                            <div class="AspNet-DetailsView">
                                <div class="AspNet-DetailsView-Data">
                                    <ul>
                                        <li>
                                            <input id="cp2_chkOrigen" type="checkbox" name="ctl00$cp2$chkOrigen" checked="checked" onclick="javascript:setTimeout('__doPostBack(\'ctl00$cp2$chkOrigen\',\'\')', 0)"><label for="cp2_chkOrigen">Son iguales a los datos de contacto locales</label>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Departamento</span>
                                            <span class="AspNet-DetailsView-Value">
                                                <select name="ctl00$cp2$ddlOrigenDepartamento" onchange="javascript:setTimeout('__doPostBack(\'ctl00$cp2$ddlOrigenDepartamento\',\'\')', 0)" id="cp2_ddlOrigenDepartamento" disabled="disabled" class="aspNetDisabled">
                                                    <option value="01">AMAZONAS</option>
                                                    <option value="02">ANCASH</option>
                                                    <option value="03">APURIMAC</option>
                                                    <option value="04">AREQUIPA</option>
                                                    <option value="05">AYACUCHO</option>
                                                    <option value="06">CAJAMARCA</option>
                                                    <option value="07">CUSCO</option>
                                                    <option value="08">HUANCAVELICA</option>
                                                    <option value="09">HUANUCO</option>
                                                    <option value="10">ICA</option>
                                                    <option value="11">JUNIN</option>
                                                    <option selected="selected" value="12">LA LIBERTAD</option>
                                                    <option value="13">LAMBAYEQUE</option>
                                                    <option value="14">LIMA</option>
                                                    <option value="15">LORETO</option>
                                                    <option value="16">MADRE DE DIOS</option>
                                                    <option value="17">MOQUEGUA</option>
                                                    <option value="18">PASCO</option>
                                                    <option value="19">PIURA</option>
                                                    <option value="20">PUNO</option>
                                                    <option value="21">SAN MARTIN</option>
                                                    <option value="22">TACNA</option>
                                                    <option value="23">TUMBES</option>
                                                    <option value="24">CALLAO</option>
                                                    <option value="25">UCAYALI</option>
                                                    <option value="99">- SIN ESPECIFICAR -</option>

                                                </select>

                                                <span id="cp2_cvOrigenDepartamento" style="visibility:hidden;">(*)</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Provincia</span>
                                            <span class="AspNet-DetailsView-Value">
                                                <select name="ctl00$cp2$ddlOrigenProvincia" onchange="javascript:setTimeout('__doPostBack(\'ctl00$cp2$ddlOrigenProvincia\',\'\')', 0)" id="cp2_ddlOrigenProvincia" disabled="disabled" class="aspNetDisabled">
                                                    <option selected="selected" value="01">TRUJILLO</option>
                                                    <option value="02">BOLIVAR</option>
                                                    <option value="03">SANCHEZ CARRION</option>
                                                    <option value="04">OTUZCO</option>
                                                    <option value="05">PACASMAYO</option>
                                                    <option value="06">PATAZ</option>
                                                    <option value="07">SANTIAGO DE CHUCO</option>
                                                    <option value="08">ASCOPE</option>
                                                    <option value="09">CHEPEN</option>
                                                    <option value="10">JULCAN</option>
                                                    <option value="11">GRAN CHIMU</option>
                                                    <option value="12">VIRU</option>

                                                </select>                        

                                                <span id="cp2_cvOrigenProvincia" style="color:Red;visibility:hidden;">(*)</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Distrito</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <select name="ctl00$cp2$ddlOrigenDistrito" id="cp2_ddlOrigenDistrito" disabled="disabled" class="aspNetDisabled">
                                                    <option selected="selected" value="01">TRUJILLO</option>
                                                    <option value="02">HUANCHACO</option>
                                                    <option value="03">LAREDO</option>
                                                    <option value="04">MOCHE</option>
                                                    <option value="05">SALAVERRY</option>
                                                    <option value="06">SIMBAL</option>
                                                    <option value="07">VICTOR LARCO HERRERA</option>
                                                    <option value="09">POROTO</option>
                                                    <option value="10">EL PORVENIR</option>
                                                    <option value="11">LA ESPERANZA</option>
                                                    <option value="12">FLORENCIA DE MORA</option>

                                                </select>

                                                <span id="cp2_cvOrigenDistrito" style="color:Red;visibility:hidden;">(*)</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Urbanización / Barrio</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtOrigenUrbanizacion" type="text" id="cp2_txtOrigenUrbanizacion" disabled="disabled" class="aspNetDisabled textboxSmall">
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Dirección</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <textarea name="ctl00$cp2$txtOrigenDireccion" rows="2" cols="20" id="cp2_txtOrigenDireccion" disabled="disabled" class="aspNetDisabled textboxSmall">
                                                </textarea>
                                                <span id="cp2_cvOrigenDireccion" style="color:Red;visibility:hidden;">(*)</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="AspNet-DetailsView-Name">Teléfono de casa</span>
                                            <span class="AspNet-DetailsView-Value">						                
                                                <input name="ctl00$cp2$txtOrigenTeleFijo" type="text" id="cp2_txtOrigenTeleFijo" disabled="disabled" class="aspNetDisabled textboxSmall input50">
                                                <input type="hidden" name="ctl00$cp2$mskOrigenTeleFijo_ClientState" id="cp2_mskOrigenTeleFijo_ClientState">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>        
            </div>
            <div class="row">
                <div class="span12" style="margin-bottom:48px">
                    <div class="hero-unit">
                        <h2 class="le-mis-alertas">Autorización de Uso de Cuenta</h2>
                        <div class="alert alert-warning">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <span id="cp2_Label36"><strong>Importante</strong>: Seleccionando "SI", doy mi autorización a la Universidad Privada del Norte para que comparta mi cuenta de acceso al Portal de Alumno con la persona que indiqué como Padre o Apoderado; y así dicha persona pueda consultar mi información académica y económica.</span>
                        </div>                    
                        <table id="cp2_rblAutorizacion">
                            <tbody><tr>
                                    <td><input id="cp2_rblAutorizacion_0" type="radio" name="ctl00$cp2$rblAutorizacion" value="True"><label for="cp2_rblAutorizacion_0">SI&nbsp;</label></td><td><input id="cp2_rblAutorizacion_1" type="radio" name="ctl00$cp2$rblAutorizacion" value="False" checked="checked"><label for="cp2_rblAutorizacion_1">NO</label></td>
                                </tr>
                            </tbody></table>
                        <span id="cp2_rfvAutorizacion" style="color:Red;visibility:hidden;">(*)</span>


                        <div id="cp2_ValidationSummary1" style="color:Red;display:none;">

                        </div>                    

                        <div id="cp2_updProgress" style="display:none;" role="status" aria-hidden="true">

                            <img src="../images/progress.gif" alt="">
                            <span id="cp2_Label28" style="color:Red;">... actualizando datos</span>                    

                        </div>
                        <div id="cp2_contenedor_mensaje" class="cssocultar">

                            <span id="cp2_lblMensaje"></span>

                        </div>
                        <br>                    
                        <input type="submit" name="ctl00$cp2$btnGuardar" value="Guardar cambios" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; ctl00$cp2$btnGuardar & quot; , & quot; & quot; , true, & quot; & quot; , & quot; & quot; , false, false))" id="cp2_btnGuardar" class="btn guardar">
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $person->id; ?>">
        <button type="submit" class="btn btn-default">Actualizar</button>
    </form>
<?php else: ?>
    <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; ?>

