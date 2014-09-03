<?php
	include("conexion.php");
	session_start(); 
	date_default_timezone_set ( "America/Bogota" );
//
// 	$V_NOM_USUARIO = strtoupper($_GET['v_usu']);  
// //
// 	$consulta   = "SELECT ID FROM USUARIOS WHERE USUARIO = '".$V_NOM_USUARIO."' AND ESTADO = 'S'";
// 	$resultado  = mysql_query($consulta);
// //
// 	if (mysql_num_rows($resultado) > 0){ 
// 		$_SESSION['E_UX'] = 1; 
// 	}
// //
// 	mysql_close($conexion);
// window.history.go(-1);
	echo '<script> alert(El nombre de usuario ya existe!)</script>';
		
	// echo '
	// 	<script type="text/javascript">
	// 			$("#tablaMain").load("php/crearUser.php");
	// 	</script>
	// 	';
?>
