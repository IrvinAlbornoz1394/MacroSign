<?php 
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
  session_start();
if(!isset($_SESSION['id'])){
  ECHO "<script language=JavaScript>window.location='../index.php';</script>"; 
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
  <link rel="stylesheet" href="../CSS/menu.css">
  <!-- ##########Propios############ -->
  <title>MacroSign</title>

</head>
<body>
  <!-- ##################################################################################### -->
  <!-- ////////////////////////////////////FIN-MENU///////////////////////////////////////// -->
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
		<!-- ###################Sessiones################### -->
		
		<ul class="nav navbar-nav navbar-right hidden-xs">
              <?php 
                if(isset($_SESSION['id'])){
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
        </ul>            
            <!--################### Sesiones ################-->
    </div><!-- /.container-fluid -->
</nav>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <div class="user">
            	<?php 
            		if(isset($_SESSION['id'])){
            			echo "<h2>".$_SESSION['nombre']."<span class='glyphicon glyphicon-user'></span></h2>";		
            		}
            	 ?>
            </div>
            <ul class="nav">
              <li><a href=""><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
              <li><a href="#">Clientes</a></li>
              <li><a href="#">Pendientes</a></li>
              <li><a href="#">Productos</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Pedidos</a></li>    
              <?php 
                if(isset($_SESSION['id'])){
                	echo '<li class="hidden-lg"><a href="#">Cerrar Sesion</a></li>';
                }
              ?>
            </ul>     
        </div><!-- /.navbar-collapse -->
  <!-- ##################################################################################### -->
  <!-- ////////////////////////////////////FIN-MENU///////////////////////////////////////// -->
  <!-- ##################################################################################### -->
	<script src="../jquery/jquery-2.1.3.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>