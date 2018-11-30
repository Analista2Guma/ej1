
	<!------------------------------------------------MAIN------------------------------------------>
		<main id="main">
			
			<!-- FORMULARIO-->
			<section id="envDatos">
				<!--<form action="<?php base_url();?>prueba1/enviarDatos" method="post">-->
					<?= form_open("prueba1/enviarDatos")?>
			
					<section id="MainForm">
						<section id="datPerBox">
							<article id="txtDatPer"><h1>Datos personales</h1>
							</article>
							<section id="datosPers">
								<article id="nomCampo1">
									Nombre:<br>
									Apellido:<br>
									Email:<br>
									Dirección:<br>
									Teléfono:<br>
								</article>
								<section id="Campo1">
									<input type="text" name="nombre" placeholder="Nombre"><br>
									<input type="text" name="apellido" placeholder="Apellido"><br>
									<input type="email" name="email"  placeholder="Email"><br>
									<input type="text" name="direccion" placeholder="Direccio"><br>
									<input type="text" name="telefono" placeholder="Telefono"><br>
								</section>
							</section>
						</section>
						<section id="datLabBox">
							<article id="txtDatLab"><h1>Datos Laborales</h1>
							</article>
							<section id="datosLab">
								<article id="nomCampo2">
									Empresa:<br>
									Area<br>
									Cargo:<br>
									Teléfono:<br>
									Dirección:<br>
								</article>
								<section id="Campo2">
									<input type="text" name="empresa" placeholder="Empresa"><br>
									<input type="text" name="area" placeholder="Area"><br>
									<input type="text" name="cargo" placeholder="Cargo"><br>
									<input type="text" name="telefonoEmp" placeholder="Telefono"><br>
									<input type="text" name="direccionEmp" placeholder="Direccion"><br>
								</section>
							</section>
						</section>
					</section>	
					<section id="btnEnviar">
						<input type="submit"  id="agregarPost" name="agrager" value="Enviar via Post">
						<input type="submit"   id="agragerAjax" name="agragerAjax" value="Enviar via Ajax">

					</section>

    			</form>
    		</section>
    			<!--DATA TABLE-->

    		<div >
    			<section id="buscador">
    				<figure><a href=""></a>></figure><div></div>
    			</section>
    			<section id="paginador">
    				<div></div>
    			</section>
    		</div>

    		<section id="dtContainer" >
    			<table id="tblPersonal" class="highlight striped green darken-4 responsive-table">
					<thead class="white-text">
						<tr><td>Id</td><td>Nombre</td><td>Apellido</td><td>Email</td><td>Direccion</td><td>Telefono</td><td>Empresa</td><td>Area</td><td>cargo</td><td>Telefono</td><td>Direccion</td></tr>
					</thead>
					<tbody class="Table content">
					</tbody>
					<tfoot>	
					</tfoot>
				</table>
    		</section>
    		
    			

    		

    		<script type="text/javascript">
    			
    			$(document).ready(function() {
					datos();
				});
				var datos = function(){
    			var tabla = $('#tblPersonal').DataTable({
    				"pageLength" : false,
        			"ajax": {
            		"url" : "<?php echo site_url("prueba1/mostrarDatos") ?>",
            		"type" : 'GET'
        			},
//nuevo xcomentaeriop
        			"language":idioma_español,
            		"searching": false,
            		"order": [[ 0, "asc"]],
       			"ordering": true,
       "bPaginate": true,


    			});
    		}

			

			var idioma_español = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
    		</script>

		</main>