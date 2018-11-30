<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>ejercisio 1</title>
		<meta charset='UTF-8/'>
	</head>
	<body>
	
<?= form_open("prueba1/recibirDatos")?>
<?
$nombre = array(
'name' => 'nombre',
'placeholder' => 'Escribe tu nombre'
);
$videos = array(
'name' => 'videos',
'placeholder' => 'Cantidad videos del curso');
?>

<label>
	<? form_label('Nombre: ', 'nombre') ?>
	<?= form_input($nombre) ?>
</label>
<label>
	<? form_label('Numero videos: ', 'videos') ?>
	
	<?= form_input($videos) ?>
</label>
<? form_submit('','Subir curso') ?>
<?= form_close() ?>
	</body>
</html>