<?php
	session_start();
	include("conexion.php");

	$EMAIL = strtoupper($_POST['CORREO']); //EMAIL

//	echo "El correo ".$EMAIL." no esta registrado en el sistema!";

	$resultado = mysql_query("SELECT NOM_DE_USUARIO, CONTRASENA, EMAIL FROM USUARIOS WHERE EMAIL='".$EMAIL."';");
	//
	$cont = 1;
	if(!$resultado){
		echo "El correo ".$EMAIL." no esta registrado en el sistema!";
	}
	else { 
		$fila = mysql_fetch_array($resultado);
		do{
			echo $cont = $cont + 1 ."\n\r";
			$usuariosbasedatos = $fila['NOM_DE_USUARIO']; 
			$contrabasedatos = $fila['CONTRASENA'];
		}while($fila = mysql_fetch_array($resultado));

       $para      = 'leydi.camargo@gmail.com';
	   $titulo = 'El título';
	   $mensaje = 'Hola';
	   $cabeceras = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($para, $titulo, $mensaje, $cabeceras);

		/*$destinatario = $EMAIL; 
		$asunto = "Recuperar Usuario y Password!"; 
		$cuerpo = 'HOLA: USUARIO = '.$usuariosbasedatos.' Y SU PASS = '.$contrabasedatos.'. fIN DEL MSJ'; 

		//Envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//Dirección del remitente 
		$headers .= "From: Pepito < leydi.camargo@gmail.com>\r\n"; 

		//Dirección de respuesta (Puede ser una diferente a la de pepito@mydomain.com)
		$headers .= "Reply-To: ".$EMAIL."\r\n"; 

		// //Ruta del mensaje desde origen a destino 
		// $headers .= "Return-path: holahola@mydomain.com\r\n"; 

		// //direcciones que recibián copia 
		// $headers .= "Cc: maria@mydomain.com\r\n"; 

		// //Direcciones que recibirán copia oculta 
		// $headers .= "Bcc: pepe@pepe.com, juan@juan.com\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers);*/

		echo "Se envio mensaje al correo ".$EMAIL." !";
	}// fin else
?>

