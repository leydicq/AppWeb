<?php
	//CONEXION
	$conexion = mysql_connect('localhost','user','123');
	if(!$conexion){
		die ('Ha sido imposible establecer Conexion a la BD'.mysql_error());
	}
	//SELECCIONAR BASE DE DATOS
	mysql_select_db('bd_investigacion',$conexion);
?>