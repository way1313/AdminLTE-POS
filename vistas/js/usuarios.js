/*=============================================
=            SUBIENDO LA FOT DEL USUARIO      =
=============================================*/


$(".nuevaFoto").change(function(){

	var imagen = this.files[0];

	
	/*=============================================
	= VALIDAMOS EL FORMATO DE LA IMAGEN JPG O PNG =
	=============================================*/

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".nuevaFoto").val("");

		Swal.fire({
  			icon: "error",
  			title: "Error al subir la imagen",
  			text: "¡La imagen debe estar en formato JPG o PNG!",
  			confirmButtonText: "¡Cerrar!"
		});


		}else if(imagen["size"] > 2000000){

			$(".nuevaFoto").val("");

			Swal.fire({
  				icon: "error",
  				title: "Error al subir la imagen",
  				text: "¡La imagen no debe pesar mas de 2MB!",
  				confirmButtonText: "¡Cerrar!"
			});

		}else{

			var datosImagen = new FileReader;
			datosImagen.readAsDataURL(imagen);

			$(datosImagen).on("load", function(event){

				var rutaImagen = event.target.result;

				$(".previsualizar").attr("src", rutaImagen);

			})

	}

})


/*=============================================
=          EDITAR USUARIO     =
=============================================*/


$(".btnEditarUsuario").click(function(){

	var idUsuario = $(this).attr("idUsuario");

	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		datatype: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);
		}
	});
})