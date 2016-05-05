$(document).ready(function(){
	$('#sing').click(function(){
		var user = $("#usuario").val();
		var pass = $("#password").val();
		if( user =="" || pass =="" ){
			// alert("hola");
			$("div#txt").html("Todos los datos son requeridos.");
		}else{
			var datos = $("form#formSesion").serialize();
			$.ajax({ //inicio ajax
					url: "../PHP/modInSesion.php",
					type: "POST",
					data: datos,
					dataType: "json",
					success: function(cJson){
						if(cJson.id == "no"){
							$("div#txt").html("Usuario o Contraseña incorrecto.");
						}else{
							console.log(cJson)
						$('#ModalIndex').modal('show'); // Hace que el modal  aparesca
						$('#nombreuser').html('<h4>'+ cJson.nombre +' '+ cJson.apellido +'</h4>');
						}
					},
				}); // fin ajax
		}
	});

	$('#aceptar').click(function(){
		window.location='../index.php';
	});

});
