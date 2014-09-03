<?php
session_start();
include ("../php/conexion.php");
if(isset($_SESSION['USUARIO']) and $_SESSION['ESTADO'] == 'Autenticado') 
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv='content-type' content='text/html; charset=UTF-8' />
	<link rel="stylesheet" type="text/css" href="css/estlosMain.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript">
		function verDetalle(codigo,tipo){
			var tabla;
			//
			if (tipo == 'Estudiante'){ 
				tabla = 'GUIA_EST'; } 
			else{ 
				tabla = 'GUIA_DOC'; 
			}
			//
			var toLoad = 'php/verentrevista.php?TABLA='+tabla+'&CODIGO='+codigo;
			//
			$.post(toLoad,function (responseText){
				document.getElementById("ventanaModal").style.visibility="visible";
				$('#mostrarDetalle').html(responseText).fadeIn(function() {window.setTimeout(function(){
					$('#mostrarDetalle'+type).addClass('window-container-visible');}, 100);
				});
			});
		};
	</script>
</head>
<body>
	<h2 class="tituloDep">General</h2>
	<div class="resultado-cabezera">
        <div class="divCodigo">Código</div>
        <div class="divnombre">Nombre de la institución</div>
		<div class="divCategoria">Categoria</div>
		<div class="divFecha">Fecha de creación</div>
	</div>	
	<!-- // -->
	<?php
	$consulta = mysql_query("SELECT NOM_INST, FECHA, MUNICIPIO, utc, CODIGO, 'Estudiante'
							   FROM GUIA_EST
							  WHERE ESTADO = 'S'
							  UNION 
							 SELECT NOM_INST, FECHA, MUNICIPIO, utc, CODIGO, 'Docente'
							   FROM GUIA_DOC
							  WHERE ESTADO = 'S'
						   ORDER BY 6, 5 DESC,1 DESC;
	");
	//IMPRIMIR CONSULTA
	$resultado = mysql_fetch_array($consulta);
	do{ 
	?>
		<div class='resultado'>
			<div class='divCodigo' id='codigo'><?php echo $resultado['CODIGO']; ?></div>
			<div class='divnombre' id='nombreInst'><?php echo $resultado['NOM_INST']; ?></div>
			<div class='divCategoria' id='categoria'><?php echo $resultado[5]; ?></div>
			<div class='divFecha' id='fecha'><?php echo $resultado['FECHA']; ?></div>
			<input type="button" value="Ver" class="verDetalle" onclick="verDetalle('<?php echo $resultado['CODIGO']; ?>','<?php echo $resultado[5]; ?>')" />			
		</div>
	<?php	
	}while($resultado = mysql_fetch_array($consulta));
	?>
	<div id="ventanaModal">
		<div id="mostrarDetalle"></div>
	</div>
	<?php mysql_close($conexion); ?>
</body>	
</html>
<?php
}else{
	header('Location: ../index.php');
}
?>