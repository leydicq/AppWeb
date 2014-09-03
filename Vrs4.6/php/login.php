<?php
	//OBTENER VARIABLE
	// session_start();
	// $USER 	= $_SESSION['v_usu']; //strtoupper($_GET['v_usu']);
	// $PASS	= $_SESSION['v_con'];
//
	$USER = strtoupper($_GET['v_usu']);
	$PASS = strtoupper($_GET['v_con']);
	// $USER = strtoupper ($_POST['USUARIO']);
	// $PASS = $_POST['CONTRASENA'];  // calve temporal.....CAMBIARRRRRRRRRRRRRRRRRRRRR
	echo "llega a login";

	$CONEXION   = mysql_connect('localhost','user','123');
	if(!$CONEXION){
		die ('Ha sido imposible establecer Conexion a la BD '.mysql_error());
	}
	mysql_select_db('bd_investigacion',$CONEXION);
	//
	$consulta   = "SELECT U.USUARIO, U.CONTRASENA, P.PERFIL, P.DES_PERFIL FROM USUARIOS U, PERFILES P WHERE U.USU_PERFIL = P.PERFIL AND U.USUARIO='".$USER."' AND U.CONTRASENA='".$PASS."'";
	$resultado  = mysql_query($consulta);
	// 		
	if (mysql_num_rows($resultado) <=0 ){ 
		$existeux = false;	
	}
	else{
		$fila   = mysql_fetch_array($resultado);
		do{
			session_start();
			$_SESSION['USUARIO'] = $fila['USUARIO']; 
			$_SESSION['ESTADO']  = 'Autenticado';
			$_SESSION['PERFIL']  = $fila['PERFIL'];
			$_SESSION['DES_PERFIL']  = $fila['DES_PERFIL'];
			$_SESSION['E_UX']        = 0;  //Controlar Usuario -> ver verificaUser.php
			$existeux = true;
		}while($fila = mysql_fetch_array($resultado));
	}
	//
	// if($existeux){
	// 	header('Location: ../main.php');
	// }
	// else{
	// 	header('Location: ../run.php?ux=2');
	// }
	 mysql_close($CONEXION);
?>