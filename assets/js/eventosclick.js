$('#agragerAjax').click(function(){

	var nombre = $('#nombre').val();
	var apellido = $('#apellido').val();
	var email = $('#email').val();
	var direccion = $('#direccion').val();
	var telefono = $('#telefono').val();
	var empresa = $('#empresa').val();
	var area = $('#area').val();
	var cargo = $('#cargo').val();
	var telefonoEmp = $('#telefonoEmp').val();
	var direccionEmp = $('#direccionEmp').val();

	$.ajax({
		type:"POST",
		url:"ejercisio1/prueba1/enviarDatos/",
		data: {
			'nombrePer': nombre,
			'apellidoPer': apellido,
			'emailPer': email,
			'direccionPer': direccion,
			'telefonoPer': telefono,
			'empresaPer': empresa,
			'areaPer': area,
			'cargoPer': cargo,
			'telEmpPer': telefonoEmp,
			'dirEmpPer': direccionEmp
		},   
		success:function(data){
			alert("Los datos fueron agregados con exito");
			$('#nombre').val("");
			$('#apellido').val("");
			('#email').val("");
			$('#direccion').val("");
			$('#telefono').val("");
			$('#empresa').val("");
			$('#area').val("");
			$('#cargo').val("");
			$('#telefonoEmp').val("");
			$('#direccionEmp').val("");
		}, error:function(jqXHR, textStatus, errorThrown)
		{
			console.log('error:: ' + errorThrown);
		}
	});
});