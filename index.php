<?php 
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
session_start();
if(!isset($_SESSION['id'])){
  //mostrar modal
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ##########universales###### -->
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- ##########Propios############ -->
  <title>MacroSign</title>
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
            <a class="navbar-brand" href="index.php">lOGO</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
              <li><a href="#">Productos</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Conocenos</a></li>  
              <li><a href="views/contacto.php">Contacto</a></li>  
            <!-- ###################Sessiones################### -->
              <?php 
                if(!isset($_SESSION['id'])){
                  echo '<li><a href="views/login.php">Iniciar Sesion</a></li>';
                  echo '<li><a href="views/cuenta.php">Crear Cuenta</a></li>';
                }else{
                  echo '<li class="dropdown">';
                    echo '<a href="#" id="sesionuser"class="dropdown-toggle" data-toggle="dropdown" role="button">';
                      echo $_SESSION['nombre']." ";
                      echo '<span class="caret"></span>';
                    echo '</a>';
                    echo '<ul class="dropdown-menu">';
                      echo '<li><a href="php/cerrarSesion.php">Cerrar Sesion</a></li>';
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


<h1>Index</h1>


  <!-- ##################################################################################### -->
  <!-- ////////////////////////////////////////FIN-BODY///////////////////////////////////////// -->
  <!-- ##################################################################################### -->
<script src="jquery/jquery-2.1.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>