$(document).on("ready",inicio);

function inicio(){
	$("form").submit(function(event){
		//alert("Estoy aqui");
		event.prevenDefault();

		$.ajax({
		
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			type:$("form").serialize(),
			success: function(respuesta){
				alert(respuesta);
			}
		})
	});