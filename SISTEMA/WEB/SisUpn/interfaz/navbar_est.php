<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header" style="margin-left: 5px;margin-right: 5px;">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><b>ISC</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li class="perfil"><a href="./ver.php">PERFIL</a></li>
        <li class="malla"><a href="./ver.php">ALUMNO</a></li>
        <li class="salir2"><a href="../../php/logout.php">CERRAR</a></li>
    </ul>
<form class="navbar-form navbar-left" role="search" action="./buscar.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
</form>
      <div class="usuario_descripcion"><h5><?php echo $_SESSION["user_tipo"];?></h5></div>
  </div><!-- /.navbar-collapse -->
  
</div>
</nav>
