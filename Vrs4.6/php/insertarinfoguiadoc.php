	<?php
	include("conexion.php");
	session_start(); 
	date_default_timezone_set ( "America/Bogota" );
	//
    $CODIGO 		 = $_POST['CODIGO'];  
	//
	$USUARIO 		 = $_SESSION['USUARIO'];
	$CONTRASENA 	 = $_SESSION['CONTRASENA'];
	//
	$V_NOM_INST 	 = strtoupper($_POST['NOM_INST']);
	$V_NOM_DIRECTIVO = strtoupper($_POST['NOM_DIRECTIVO']);
	$V_CARGO 		 = strtoupper($_POST['CARGO']);
	$V_MUNICIPIO 	 = strtoupper($_POST['MUNICIPIO']);
	$V_DIRECCION 	 = strtoupper($_POST['DIRECCION']);	
	$V_TEL			 = $_POST['TEL'];
	$V_EMAIL		 = strtoupper($_POST['EMAIL']);
	$V_PREG_1		 = $_POST['PREG_1'];
	$V_PREG_2		 = $_POST['PREG_2'];
	$V_PREG_3		 = $_POST['PREG_3'];
	$V_PREG_4		 = $_POST['PREG_4'];
	$V_PREG_5		 = $_POST['PREG_5'];
	$V_PREG_6		 = $_POST['PREG_6'];
	$V_PREG_7		 = $_POST['PREG_7'];
	$V_UTC			 = date("U");
	//CONSULTA
	$consultausuario = mysql_query("SELECT ID FROM USUARIOS WHERE USUARIO='".$USUARIO."' LIMIT 1");
	$resultado 		 =  mysql_fetch_array($consultausuario);
	
	do {
		$V_ID_USUARIO   = $resultado['ID'];
	} while ($resultado =  mysql_fetch_array($consultausuario));
	
	if($CODIGO == 0){
		$consulta = mysql_query("INSERT INTO GUIA_DOC (ID_USUARIO, NOM_INST, NOM_DIRECTIVO, CARGO, DIRECCION, TEL, 
											EMAIL, PREG_1, PREG_2, PREG_3, PREG_4, PREG_5, PREG_6, PREG_7, 
											utc, FECHA, MUNICIPIO, ESTADO) 
									  VALUES ('$V_ID_USUARIO', '$V_NOM_INST', '$V_NOM_DIRECTIVO','$V_CARGO','$V_DIRECCION','$V_TEL',
									  	    '$V_EMAIL','$V_PREG_1','$V_PREG_2','$V_PREG_3','$V_PREG_4','$V_PREG_5','$V_PREG_6','$V_PREG_7',
									  	    '$V_UTC','".date("Y-m-d H:i:s")."','$V_MUNICIPIO','S')
									");
	}else{
		$consulta = mysql_query("UPDATE GUIA_DOC
								    SET NOM_INST      ='".$V_NOM_INST."',
								    	NOM_DIRECTIVO ='".$V_NOM_DIRECTIVO."',
								    	CARGO         ='".$V_CARGO."',
								    	DIRECCION     ='".$V_DIRECCION."',
								    	TEL           ='".$V_TEL."',
								    	EMAIL         ='".$V_EMAIL."',
								    	PREG_1        ='".$V_PREG_1."',
								    	PREG_2        ='".$V_PREG_2."', 
									    PREG_3        ='".$V_PREG_3."', 
									    PREG_4        ='".$V_PREG_4."',
									    PREG_5        ='".$V_PREG_5."',
									    PREG_6        ='".$V_PREG_6."',
									    PREG_7        ='".$V_PREG_7."',
									    FECHA         ='".date("Y-m-d H:i:s")."', 
										MUNICIPIO     ='".$V_MUNICIPIO."'
								  WHERE CODIGO        =".$CODIGO."
								;");
	}
	//CERRAR CONEXION
	mysql_close($conexion);
	header('Location: ../main.php');
?>

