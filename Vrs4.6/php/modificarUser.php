<?php
	session_start();
	include ("../php/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv='content-type' content='text/html; charset=UTF-8' />
	<link rel="stylesheet" type="text/css" href="css/estlosMain.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript">
		function deleteUser(val){
			if(confirm('¿Desea Eliminar el Usuario?')) {
				 $("#tablaMain").load("php/eliminaUser.php?id="+val);
			}
			else{
				null;
			}
		};

		function editUser(val){
			$("#tablaMain").load("php/editaUser.php?id="+val);
		};

	</script>
</head>
<body>
	<h2 class="tituloDep">Modificar Usuarios</h2>
	<div class="resultado-cabezera">
        <div class="divusuario">Usuario</div>
        <div class="divNomb">Nombre</div>
        <div class="divperfil">Rol</div>
	</div>	
	<?php
	$consulta = mysql_query("SELECT ID, USUARIO, CONCAT(NOMBRE,' ',APELLIDO), DES_PERFIL
							   FROM USUARIOS, PERFILES
							  WHERE USU_PERFIL = PERFIL;
							");
	//IMPRIMIR CONSULTA
	$resultado = mysql_fetch_array($consulta);
	do{ 
	?>
	<div class='resultado'>
		<div class='divusuario' id=''><?php echo $resultado['USUARIO']; ?></div>
		<div class='divNomb'    id=''><?php echo $resultado['2']; ?></div>
		<div class='divperfil'  id=''><?php echo $resultado['DES_PERFIL']; ?></div>
		<input  type="button"  value="Editar"   class="verDetalle" onclick="editUser(<?php echo $resultado['ID']; ?>)" />	
		<input  type="button"  value="Eliminar" class="verDetalle" onclick="deleteUser(<?php echo $resultado['ID']; ?>)" />			
	</div>
	<?php	
	}while($resultado = mysql_fetch_array($consulta));
	?>

	<?php mysql_close($conexion); ?>
</body>	
</html>
