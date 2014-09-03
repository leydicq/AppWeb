<?php
	session_start();  
    include("conexion.php"); 
    date_default_timezone_set ("America/Bogota");
    $id_user = $_GET['id'];   
    $consulta = mysql_query("UPDATE USUARIOS 
    					        SET ESTADO = 'N'
                              WHERE ID = ".$id_user."
                            ;"); 
    // $resultado = mysql_fetch_array($consulta); 
    echo "<h1>Usuario eliminado con Éxito!</h1>";
?>