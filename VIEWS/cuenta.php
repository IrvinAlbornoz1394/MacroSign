<?php 
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
  session_start();
if(isset($_SESSION['id'])){
  ECHO "<script language=JavaScript>window.location='index.php';</script>"; 
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- ##########universales###### -->
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- ######Propios########3 -->
	<title>Crear Cuenta</title>
	
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
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="row" id="txt">
					
				</div>
				<form  id="cliente" >
					<div class="form-group row">
						<div class="col-md-3">
							<label for="correo">Correo</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="correo" id="correo" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label for="contrasena">Contraseña</label>
						</div>
						<div class="col-md-9">
							<input type="password" class="form-control" name="contrasena" id="contrasena" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label for="confirm-contrasena">Confirmar Contraseña</label>
						</div>
						<div class="col-md-9">
							<input type="password" class="form-control" name="contrasena1" id="confirm_contrasena" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label for="nombres">Nombre(s)</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nombres" id="nombres" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label for="apellidos">Apellidos</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="apellidos" id="apellidos" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label for="telefono">Telefono</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="telefono" id="telefono" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label for="telefono_adicional">Tel. Adicional</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="telefono_adicional" id="telefono_adicional" required>
						</div>
					</div>
				</form>
				<div class="form-group row">
					<div class="checkbox col-md-8">
  						<label>
    						<input type="checkbox" value="1" id="terminos_y_condiciones">
		   					Acepto los termino y condiciones
  						</label>
					</div>
					<div class="col-xs-4">
						<button class="btn btn-primary pull-right" id="cliente_nuevo">Crear Cuenta</button>
					</div>
				</div>				
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<!-- ##################################################################################### -->
	<!-- //////////////////////////////////FIN-BODY/////////////////////////////////////////// -->
	<!-- ##################################################################################### -->

	<!-- ##################################################################################### -->
	<!-- ////////////////////////////MODAL CREAR CUENTA/////////////////////////////////////// -->
	<!-- ##################################################################################### -->

	<div class="modal fade" id="ModalCuentaNueva" role="dialog" >
    <div class="modal-dialog modal-md" id="contenido">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">Felicidades</h4>
              <br>
              <div></div>
        </div>
        <div class="modal-body">
        	<p>
        		Se te ha enviado un correo, por favor verificalo para confirmar la cuenta.
        	</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="index" data-dismiss="modal" onclick="index();">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  	<!-- ###################################################################################### -->
	<!-- //////////////////////// FIN MODAL CREAR CUENTA/////////////////////////////////////// -->
	<!-- ###################################################################################### -->

<script src="../jquery/jquery-2.1.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../jquery/abc.js"></script>
</body>
</html>