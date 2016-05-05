$(document).ready(function(){
	///Dirigir al index///

	////Alta de usuario Cliente
	$('#cliente_nuevo').click(function(){
		var correo = $("#correo").val();
		var pass = $("#contrasena").val();
		var pass2 = $("#confirm_contrasena").val();
		var nombres = $("#nombres").val();
		var apellidos = $("#apellidos").val();
		var telefono = $("#telefono").val();
		var telefono2 = $("#telefono_adicional").val();
		if( correo =="" || pass =="" || pass2=="" || nombres=="" || apellidos =="" || telefono =="" || telefono2=="" ){
			$("div#txt").html("<div class='alert alert-danger'>Todos los campos son requeridos</div>");
			return false;
		}else{
			if (pass != pass2) {
				$("div#txt").html("<div class='alert alert-danger'>Las Contraseña no coinciden</div>");
				return false;
			}else{
				if(correo.indexOf('@', 0) == -1 || correo.indexOf('.', 0) == -1){
					$("div#txt").html("<div class='alert alert-danger'>Ingresa un correo valido</div>");
					return false;
				}else{
					var datos = $("form#cliente").serialize();
						$.ajax({ //inicio ajax
							url: "../PHP/ModInsertCliente.php",
							type: "POST",
							data: datos,
							success: function(data){
								console.log("Se esta generando la consulta");
								$('#ModalCuentaNueva').modal('show');
							},
						}); // fin ajax

				}
			}
		}
	});




});
	//////Alta de producto////////////
	function altaproducto(){
		var datos = $("form#producto").serialize();
			$.ajax({ //inicio ajax
					url: "../PHP/ModInsertProducto.php",
					type: "POST",
					data: datos,
					success: function(data){
						console.log("Se esta generando la consulta");
						$('#ModalGuardardo').modal('show');
						// mostrarproducto();
						// $('#Modal1').modal('hide');	
						// $("#producto").val("");
			// $("#precio").val("");
					},
				}); // fin ajax

			
	};


function index(){
	window.location='../index.php';
}