<!DOCTYPE html>
<html>
<head>
	<title>Vista cargada desde el controlador y archivo controlador.php</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h1> Bienvenidos amigos del CDS! Este es un mensaje cargado desde el controlador y archivo controlador.php </h1>
<?php echo getNombre(); ?>
<?php echo foo(); ?>
<?php $r = operaciones_basicas(6,3, "Multiplicar");
echo $r."<br>";?>
<?php echo recursividad(1); ?>
<?php echo buclefor(); ?>
<?php echo estructura(); ?>
<?php echo relojjavascript(); ?>
<?php echo redireccion(); ?>
<?php echo alerta(); ?>

<br><br>
<input type="button" value="&#9729; Deme click" onclick="mensaje()"><br><br>
<button type="submit" onclick="mensaje()"><i class="glyphicon glyphicon-thumbs-up"> Deme click</i></button><br><br>
<script>
function mensaje() {
  alert("Hola este es un boton de tipo input");
}
</script>


</body>
</html>