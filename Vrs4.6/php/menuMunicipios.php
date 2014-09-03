<?php
	session_start();
	include ("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/estlosMain.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ConsultaAcacias').click(function(){
				$('#tablaMain').load('php/consultaAcacias.php');
			});
			$('#ConsultaCumaral').click(function(){
				$('#tablaMain').load('php/consultaCumaral.php');
			});
			$('#ConsultaGranada').click(function(){
				$('#tablaMain').load('php/consultaGranada.php');
			});
			$('#ConsultaVcio').click(function(){
				$('#tablaMain').load('php/consultaVcio.php');
			});
		});
	</script>
</head>
<body>
	<div class="contenedorPrincipal">
		<div class="contenedor" id="ConsultaAcacias">
			<img class="icon" src="img/Hacacias.jpg" ondragstart="return false">
			<p class="texto">Acacias</p>
		</div>

		<div class="contenedor" id="ConsultaCumaral">
			<img class="icon" src="img/Hcumaral.jpg" ondragstart="return false">
			<p class="texto">Cumaral</p>
		</div>

		<div class="contenedor" id="ConsultaGranada">
			<img class="icon" src="img/Hgranada.jpg" ondragstart="return false">
			<p class="texto">Granada</p>
		</div>

		<div class="contenedor" id="ConsultaVcio">
			<img class="icon" src="img/Hvcio.jpg" ondragstart="return false">
			<p class="texto">Villavicencio</p>
		</div>
	</div>
	<?php mysql_close($conexion); ?>
</body>	
</html>