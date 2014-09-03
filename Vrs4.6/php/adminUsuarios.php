<?php
session_start();
if(isset($_SESSION['USUARIO']) and $_SESSION['ESTADO'] == 'Autenticado') 
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv='content-type' content='text/html; charset=UTF-8' />
	<link rel="stylesheet" type="text/css" href="css/estlosMain.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>	
	<script type="text/javascript" src="../js/loadTables.js"></script>
	<script type="text/javascript">
		$("#crearUser").click(function(){
			$("#tablaMain").load("php/crearUser.php");
	});

	$("#modificarUser").click(function(){
		$("#tablaMain").load("php/modificarUser.php");
	});
	</script>
	
</head>
<body>
	<h2 class="tituloDep">Gesti&oacute;n de Usuarios</h2>
	<div id="div-user"> 
		<img id="img-user"src="img/UserGroup.png" ondragstart="return false" alt="User" title="User"></img>
		<ul id="lista-user">	
		<li class="listaBusqueda"><a href="#" id="crearUser">Crear Nuevo</a></li>
		<li class="listaBusqueda"><a href="#" id="modificarUser">Modificar</a></li>
	</ul>
	</div>
</body>	
</html>
<?php
}else{
	header('Location: ../index.php');
}
?>
