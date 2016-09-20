<?php include "../header.php"; ?>
<?php include "../navbar.php"; ?>
<form action="../../php/estudiante/registro.php" method="post">
<div class="container"style="padding:50px 0px 50px;">
    <div class="row">
        <h2>Registro de Datos del Estudiante</h2>
    </div>
    <div class="row">
        <div class="span3">
            <div class="hero-unit">
            <h2 class="le-mis-alertas">Generales</h2>          
                
                <div class="form-group">
                    <label for="per_nombres">Nombre</label>
                    <input title="Se requiere un Nombre o el Nombre no es valido" type="text" class="form-control" id="per_nombres" name="per_nombres" placeholder="Nombre Completo" onkeypress="return valida_frases(event)" required>
                </div>
                <div class="form-group">
                    <label for="fullname">Apellido Paterno</label>
                    <input type="text" class="form-control" id="per_appaterno" name="per_appaterno" placeholder="Apellido Paterno" onkeypress="return valida_letras(event)" required>
                </div>
                <div class="form-group">
                    <label for="fullname">Apellido Materno</label>
                    <input type="text" class="form-control" id="per_apmaterno" name="per_apmaterno" placeholder="Apellido Materno" onkeypress="return valida_letras(event)" required>
                </div>
                <div class="form-group">
                    <label for="fullname">D.N.I</label>
                    <input type="text" class="form-control" id="per_dni" name="per_dni" placeholder="D.N.I" maxlength="8" onkeypress="return valida_numero(event)" required>
                </div>  
                <div class="form-group">
                    <label for="fullname">Genero</label>
                    <?php include '../../utilidades/genero.php'; ?>
                </div>
                <div class="form-group">
                    <label for="fullname">Fecha de Nacimiento</label>
                    <input type="date" class="form-control input-xlarge datepicker hasDatepicker" id="per_fcnacimiento" name="per_fcnacimiento">
                </div>
                                 
            </div>
        </div>
        <div class="span3">
            <div class="hero-unit">
                <h2 class="le-mis-alertas">Estudiante</h2>
                <div class="form-group">
                    <label for="username">Codigo </label>
                    <input title="Se requiere un codigo" type="text" class="form-control" id="est_codigo" name="est_codigo" placeholder="Codigo del Estudiante" maxlength="5" onkeypress="return valida_numero(event)" required>
                </div>
                <div class="form-group">
                    <label for="username">Año</label>
                    <select class='form-control' name="ano" id="ano">
                        <option value="0">--Seleccionar--</option>
                        <?php 
                            for($i=1970;$i<=2016;$i++){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                     </select>
                </div>
                <div class="form-group">
                    <label for="username">Semestre </label>       
                   
                    <select class='form-control' name="semestre" id="semestre">
                        <option value="0">--Seleccionar--</option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">Carrera </label>
                    <select class='form-control' name="carrera" id="carrera">
                        <option value="0">--Seleccionar--</option>
                        <option value="1">Ing. Sitemas Computacionales</option>
                        <option value="2">Ing. Electronica</option>
                    </select>
                </div>
                
            </div>
        </div>
        <div class="span3">
            <div class="hero-unit">
           <h2 class="le-mis-alertas">Direccion</h2>
           <?php include '../../utilidades/ubicacion.php'; ?>
           <div class="form-group">
                    <label for="per_urbanizacion">Urbanizacion</label>
                    <input type="text" class="form-control" id="per_urbanizacion" name="per_urbanizacion" placeholder="Urbanizacion">
           </div>   
           <div class="form-group">
                    <label for="per_direccion">Direccion</label>
                    <input type="text" class="form-control" id="per_direccion" name="per_direccion" placeholder="Direccion">
           </div>   
            </div>
        </div>
        <div class="span3">
            <div class="hero-unit">
           <h2 class="le-mis-alertas">Contacto</h2>
           <div class="form-group">
                    <label for="email">Correo Electronico</label>
                    <input type="email" class="form-control" id="per_correo" name="per_correo" placeholder="Correo Electronico">
           </div>
                <div class="form-group">
                    <label for="tel_nombre">Telefono Fijo</label>
                    <input type="text" class="form-control" id="tel_fijo" name="tel_fijo" placeholder="Telefono Fijo" maxlength="9" onkeypress="return valida_numero(event)" required>
                </div>
                <div class="form-group">
                    <label for="tel_nombre">Telefono Celular</label>
                    <input type="text" class="form-control" id="tel_celular" name="tel_celular" placeholder="Telefono Celular" maxlength="9" onkeypress="return valida_numero(event)" required>
                </div>
           
            </div>
            
            <button type="submit" class="btn btn-default" style="float: right">Registrar</button>
            
        </div>
    </div>
</div>
</form>
<script src="../../js/valida.js"></script>
<?php include "../footer.php"; ?>