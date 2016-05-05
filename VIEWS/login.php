<?php 
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
  session_start();
if(isset($_SESSION['id'])){
  ECHO "<script language=JavaScript>window.location='index.php';</script>"; 
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- ##########universales###### -->
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- #########´propios########### -->
	<!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
  <title>Inicio de Usuarios</title>
</head>
<body>
  <!-- ##################################################################################### -->
    <!-- ////////////////////////////////////////MENU///////////////////////////////////////// -->
    <!-- ##################################################################################### -->
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">lOGO</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
              <li><a href="#">Productos</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Conocenos</a></li>  
              <li><a href="contacto.php">Contacto</a></li>  
            <!-- ###################Sessiones################### -->
              <?php 
                if(!isset($_SESSION['id'])){
                  echo '<li><a href="login.php">Iniciar Sesion</a></li>';
                  echo '<li><a href="cuenta.php">Crear Cuenta</a></li>';
                }else{
                  echo '<li class="dropdown">';
                    echo '<a href="#" id="sesionuser"class="dropdown-toggle" data-toggle="dropdown" role="button">';
                      echo $_SESSION['nombre']." ";
                      echo '<span class="caret"></span>';
                    echo '</a>';
                    echo '<ul class="dropdown-menu">';
                      echo '<li><a href="#">Cerrar Sesion</a></li>';
                    echo '</ul>';
                  echo '</li>';
                }
              ?>
            <!--################### Sesiones ################-->
            </ul>     
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>
  <!-- ##################################################################################### -->
  <!-- ////////////////////////////////////////FIN-MENU///////////////////////////////////////// -->
  <!-- ##################################################################################### -->

  <!-- ##################################################################################### -->
  <!-- ////////////////////////////////////////BODY///////////////////////////////////////// -->
  <!-- ##################################################################################### -->
	<div class="container">
    		<p><br/></p>
  		<div class="row">
  			<div class="col-md-4"></div>
  			<div class="col-md-4">
  				<div class="panel panel-info">
  					<div class="panel-body">
    						<div class="page-header">
  							<h3>Bienvenido</h3>
						</div>
            <div id="txt"></div>
						<form role="form" id="formSesion">
  							<div class="form-group">
    								<label for="usuario">Correo</label>
    								<div class="input-group">
  									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  									<input type="text" class="form-control" id="usuario" name="correo" placeholder="Correo">
								</div>
  							</div>
  							<div class="form-group">
    								<label for="password">Contraseña</label>
    								<div class="input-group">
  									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
  									<input type="password" class="form-control" name="pass" id="password" placeholder="Contraseña">
								</div>
                
  							</div>
  							<hr/>
						</form>
            <button  class="btn btn-primary" id="sing" ><span class=""></span>Ingresar</button>
  					</div>
				</div>
  			</div>
		</div>
    </div>
    <!-- modal index -->
    <div class="modal fade" id="ModalIndex" role="dialog" >
    <div class="modal-dialog modal-sm" id="contenido">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">Bienvenido</h4>
              <br>
              <div id="nombreuser"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="aceptar" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
<!-- ##################################################################################### -->
  <!-- ////////////////////////////////////////FIN-BODY///////////////////////////////////////// -->
  <!-- ##################################################################################### -->
<script src="../jquery/jquery-2.1.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../jquery/login.js"></script>
</body>
</html>