<?php
	session_start();  
    include("conexion.php"); 
    date_default_timezone_set ("America/Bogota");
    $TABLA  = strtoupper($_GET['TABLA']); 
    $CODIGO = $_GET['CODIGO'];   
    $consulta = mysql_query("UPDATE ".$TABLA." 
    					        SET ESTADO = 'N'
                              WHERE CODIGO = ".$CODIGO."
                            ;"); 
    echo "<h1>Entrevista eliminada con Éxito!</h1>";
?>