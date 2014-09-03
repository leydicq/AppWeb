<?php
session_start();
if(isset($_SESSION['USUARIO']) and $_SESSION['ESTADO'] == 'Autenticado') 
{
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv='content-type' content='text/html; charset=UTF-8' />
		<title>App Atencion Domiciliaria</title>
		<link rel="stylesheet" type="text/css" href="css/estlosMain.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>	
		<script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript" src="js/search.js"></script>
		<script type="text/javascript" src="js/loadTables.js"></script>
	</head>	
	<body>
		<header>
			<div id="cabezota">

				<div id="logoMain">
					<a href="main.php"; ><img src="img/logounillanos.png" ondragstart="return false"></a>
				</div>

				<div id="restoCabecera">
					<nav id="navuser">
						<input type="checkbox" id="popup" class="popUpControl">
						<label class="elboton" for="popup">
  						<span class="click" >
  							<img  src="img/user.png" ondragstart="return false"></img>	
							<?php
								echo ''.strtoupper($_SESSION['USUARIO']).'<br>';						
							?>
						</span>
					
  						<span class="hiddenbox">
						    <?php 							
								echo ''.strtoupper($_SESSION['DES_PERFIL']);
						  	?>
						  	<a href="php/cerrarsesion.php"><div>Cerrar Sesi&oacute;n</div></a>
						 </span>
						</label>
					</nav>
					<nav id="menu">	
						<ul class="lista">
							<li><a href="#"><img src="img/nuevo3.png" alt="Nuevo" title="Nuevo" ondragstart="return false"></a>
								<ul>
									<li id="nuevoEst"><a href="#">Guia para Estudiantes</a></li>
									<li id="nuevoDoc"><a href="#">Guia para Docentes</a></li>
								</ul>	
							</li>
						</ul>
					</nav> 
				</div>
			</div>
		</header>
		<div id="opt">
			<aside>
				<div class="lighter">
					<form id="formbuscar" method="get" action="#"> 
						<span><input id="busca" type="search" name="clave" results="5" class="search rounded" placeholder="Buscar..."
							onfocus="if (this.value == 'Buscar...') {this.value = '';}" 
							onblur="if (this.value == '') {this.value = 'Buscar...';}"
							>
						</span>
					</form>
				</div>
				<div id="Busquedas_comunes">
					<h3>B&uacute;squeda comunes</h3>
					<ul class="listaBusqueda">
						<li class="listaBusqueda"><a href="#"><div id="ConsultaBase">General</div></a></li>
						<li class="listaBusqueda"><a href="#"><div id="ConsultaDepar">Por Municipio</div></a></li>
						<li class="listaBusqueda"><a href="#"><div id="ConsultaInst">Por Instituci&oacute;n</div></a></li>
						<li class="listaBusqueda"><a href="#"><div id="ConsultaUsuarios">Usuario Actual</div></a></li>
					<?php
						if($_SESSION['PERFIL'] == 1){
					?>
						<li class="listaBusqueda"><a href="#"><div id="Administracion">Administraci&oacute;n</div></a></li>
					<?php
						}
					?>
					</ul>
				</div>	
			</aside>
			<section>
				<article id="tablaMain"></article>
			</section>
			<footer>Proyecto de Investigaci&oacute;n - 2014</footer>
		</div>
	</body>
</html>	
<?php
}else{
	header('Location: index.php');
}
?>
