<?php
	include("conexion.php");
	session_start(); 
	date_default_timezone_set ( "America/Bogota" );
	//
	$CODIGO				  = $_GET['v_cod'];
	$V_NOM_USUARIO		  = strtoupper($_GET['v_usu']);
	$V_NOMBRE			  = strtoupper($_GET['v_nom']);
	$V_APELLIDO			  = strtoupper($_GET['v_ape']);
	$V_EMAIL			  = strtoupper($_GET['v_ema']);
	$V_ROL 				  = strtoupper($_GET['v_rol']);
	$V_CONTRASENA		  = $_GET['v_con'];
    $V_VALIDA_CONTRASENA  = $_GET['v_vco'];
    //
    //
	$consulta   = "SELECT ID FROM USUARIOS WHERE USUARIO= '".$V_NOM_USUARIO."' AND ESTADO = 'S'";
	$resultado  = mysql_query($consulta);
	//
	if (mysql_num_rows($resultado) <= 0){ 
		$existeux = false;	
	}
	else{
		$existeux = true;
	}

	if($existeux){
		if($CODIGO == 0){
			echo "<h1>El Nombre de Usuario que esta ingresando, Ya existe!</h1>";
			mysql_close($conexion);
		}else{
			if ($V_ROL == 'ADMINISTRADOR'){
				$V_ROL = 1;
			}else{
				$V_ROL = 2;
			}
			//
			$consulta = mysql_query("UPDATE USUARIOS
									    SET NOMBRE        		='".$V_NOMBRE."',
									    	APELLIDO      		='".$V_APELLIDO."',
									    	USUARIO       		='".$V_NOM_USUARIO."',
									    	CONTRASENA    		='".$V_CONTRASENA."',
									    	V_VALIDA_CONTRASENA = '".$V_VALIDA_CONTRASENA."',
									    	EMAIL         		='".$V_EMAIL."',
									    	USU_PERFIL          =".$V_ROL."
									  WHERE CODIGO        		=".$CODIGO."
									;");
		}
	}
	else{
		if ($V_ROL == 'ADMINISTRADOR'){
			$V_ROL = 1;
		}else{
			$V_ROL = 2;
		}
		//
		if($CODIGO == 0){
			$consulta = mysql_query("INSERT INTO USUARIOS (NOMBRE, APELLIDO, USUARIO, CONTRASENA, VALIDA_CONTRASENA, EMAIL, ESTADO, USU_PERFIL)
									 VALUES ('".$V_NOMBRE."', '".$V_APELLIDO."','".$V_NOM_USUARIO."','".$V_CONTRASENA."','".$V_VALIDA_CONTRASENA."','".$V_EMAIL."', 'S', ".$V_ROL.")
									");
	    echo "<h1>Usuario almacenado con Éxito!</h1>";
	    mysql_close($conexion);
		}
	}
?>
