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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- ##########Propios############ -->
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" href="../css/contacto.css">
  <title>MacroSign</title>
</head>
<body>
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
    <div class="page-header" id="encabezado">
      <h1>Contacto.</h1>
    </div>
    <!-- ############################################################ -->
    <!-- #########################Datos############################## -->
    <!-- ############################################################ -->
    <div class="row" id="datosgen">
      <div id="datostd">
        <div class="row" id="id">
          <div class="col-md-9" id="datos1">
            <div class="row" id="id1">
              <div class="col-md-4 col-sm-4 col-xs-4" >
                <ul id="lista1">
                  <li><p><strong>MacroSign</strong></p></li>
                  <li><p><strong>Direccion</strong></p></li>
                  <li><p><strong>Telefonos</strong></p></li>
                  <li><p><strong>Horario de<br>atencion</strong></p></li>
                </ul>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-8" id="id2">
                <ul id="lista2">
                  <li><p>Creamos Infinidad de Ideas</p></li>
                  <li><p>Calle 105 #443D x 52A y 54 Col. Dolores Otero</p></li>
                  <li><p>Tel. (992)2-72-04-74, (999)2-74-38-29</p></li>
                  <li><p>Lunes a Sabado de 8:00 am a 9:00 pm</p></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 hidden-xs">
            <a href="#mapa" >
              <div id="vermapa">
                <span class="glyphicon glyphicon-map-marker"></span><br><br>
                <strong>Ver mapa</strong>
              </div>
            </a>
          </div>
        </div>  
      </div>
    </div>
    <!-- ############################################################ -->
    <!-- #########################Fin Datos########################## -->
    <!-- ############################################################ -->
    <div class="row" id="martop30">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <p>Por favor escribe tus datos en los espacios correspondientes, nos comunicaremos lo más pronto posible.</p>
            <p>Los espacios con (*) son obligatorios.</p><br>
            <p>¡Gracias por su Preferencia!</p>
            <hr> 
      </div>
      <div class="col-md-2"></div>    
    </div>
    <!-- ############################################################ -->
    <!-- #########################FORMULARIO######################### -->
    <!-- ############################################################ -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-6">
        <form action="">
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">*Nombre completo:</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">*Correo:</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Empresa:</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">*Telefono:</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">*Servicio de interes:</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Empresa:</label>
            </div>
            <div class="col-md-8">
              <textarea type="text" class="form-control"></textarea>
            </div>
          </div>
        </form>
        <div class="pull-right">
          <button class="btn btn-default">Limpiar</button>
          <button class="btn btn-primary">Enviar</button>
        </div>
      </div>
      <div class="col-md-2"></div> 
    </div>
    <!-- ############################################################ -->
    <!-- #####################FIN FORMULARIO######################### -->
    <!-- ############################################################ -->

    <!-- ############################################################ -->
    <!-- #########################MAPA############################### -->
    <!-- ############################################################ -->
    <section id="mapa" class="row">
      <div class="divmapa">
        <div class="row">
          <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3726.3131902836267!2d-89.62382789267879!3d20.939934238385995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d20.9404503!2d-89.6232271!5e0!3m2!1ses-419!2smx!4v1448859126159" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>  
      </div>
    </section>
    <!-- ############################################################ -->
    <!-- #########################FIN MAPA############################### -->
    <!-- ############################################################ -->
  </div>



  <!-- ##################################################################################### -->
  <!-- ////////////////////////////////////////FIN-BODY///////////////////////////////////////// -->
  <!-- ##################################################################################### -->
<script src="../jquery/jquery-2.1.3.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>