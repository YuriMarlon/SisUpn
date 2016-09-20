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

<?php if($person!=null):?>

<form role="form" method="post" action="../../php/estudiante/actualizar.php">
  <div class="form-group">
    <label for="name">Nombres</label>
    <input type="text" class="form-control" value="<?php echo $person->nombres; ?>" name="nombres" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido Paterno</label>
    <input type="text" class="form-control" value="<?php echo $person->ap_paterno; ?>" name="ap_paterno" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido Materno</label>
    <input type="text" class="form-control" value="<?php echo $person->ap_materno; ?>" name="ap_materno" required>
  </div>
  <div class="form-group">
    <label for="lastname">Fecha de Nacimiento</label>
    <input type="text" class="form-control" value="<?php echo $person->fecha_nacimiento; ?>" name="fecha_nacimiento" required>
  </div>
    
    
  <div class="form-group">
    <label for="lastname">Genero</label>
    <select class="form-control">
    <?php if ($person->genero=='Masculino'): ?>
        <option selected="selected">Masculino</option>
        <option>Femenino</option>
        <?php else: ?>
           <option >Masculino</option>
        <option selected="selected">Femenino</option> 
       <?php endif; ?> ?>
    </select>
    
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" value="<?php echo $person->direccion; ?>" name="direccion" required>
  </div>
  <div class="form-group">
    <label for="address">Urbanizacion</label>
    <input type="text" class="form-control" value="<?php echo $person->urbanizacion; ?>" name="urbanizacion" required>
  </div>
  <div class="form-group">
    <label for="address">Distrito</label>
    <input type="text" class="form-control" value="<?php echo $person->distrito; ?>" name="distrito" required>
  </div>
  <div class="form-group">
    <label for="address">Provincia</label>
    <input type="text" class="form-control" value="<?php echo $person->provincia; ?>" name="provincia" required>
  </div>
  <div class="form-group">
    <label for="email">Correo Personal</label>
    <input type="email" class="form-control" value="<?php echo $person->correo_personal; ?>" name="correo_personal" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono Fijo</label>
    <input type="text" class="form-control" value="<?php echo $person->telefono_fijo; ?>" name="telefono_fijo" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono Celular</label>
    <input type="text" class="form-control" value="<?php echo $person->celular; ?>" name="celular" >
  </div>
  <div class="form-group">
    <label for="phone">Año de Ingreso</label>
    <input type="text" class="form-control" value="<?php echo $person->ingreso; ?>" name="ingreso" >
  </div>
  <div class="form-group">
    <label for="phone">Semestre</label>
    <input type="text" class="form-control" value="<?php echo $person->semestre; ?>" name="semestre" >
  </div>
  <div class="form-group">
    <label for="phone">Modalidad de Ingreso</label>
    <select class="form-control">
    <?php if ($person->modalidad_ingreso=='Regular'): ?>
        <option selected="selected">Regular</option>
        <option>Traslado</option>
        <?php else: ?>
           <option >Regular</option>
        <option selected="selected">Traslado</option> 
       <?php endif; ?> ?>
    </select>
  </div>
  <div class="form-group">
    <label for="phone">Codigo UPN</label>
    <input type="text" class="form-control" value="<?php echo $person->codigo_upn; ?>" name="codigo_upn" >
  </div>
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>