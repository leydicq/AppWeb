<?php
	$ux = $_GET['ux'];
	
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="css/formstyle.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="lib/crypt/md5/2.2/md5-min.js"></script>
	<script type='text/javascript' src='lib/crypt/md5/2.2/md5-min.js'></script>
	
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<section class="container">
		<div class="login">
		    <h1>Inicio de sesión Web App</h1>
	    	<form id="formulario1"  method="get" action="#">
		        <p><input id="USUARIO" type="text" name="USUARIO" value="" placeholder="Usuario"></p>
		        <p><input id="CONTRASENA" type="password" name="CONTRASENA" value="" placeholder="Contraseña"></p>
		       <!--  <p><input id="ESTADO" type="hidden" name="ESTADO" value="N"></p> -->
		        <p class="remember_me">
		        	<label>
		            	<input type="checkbox" name="remember_me" id="remember_me">Recordarme en este equipo
		          	</label>
		        </p>
		        <!-- <p class="submit"><input type="submit" name="commit" value="Iniciar Sesión" ></p> -->
		         <input class="botones_creauser" type="button"  value="Guardar" id="b_creaUser" onclick="verificaDatos()" />
	        </form>
		</div>
		<div class="login-help">
		    <p>Olvidaste tu contraseña? <a href="php/recuperarPass.php">Click aquí para recuperarla</a>.</p>
		</div>
	<?php
    if ($ux == 2){ 
    ?>
        <script language="JavaScript" type="text/javascript">
          alert("Usuario o Contraseña Incorrectos.");                          
        </script>
	<?php
    }
	?>	
	</section>  
</body>


<script type='text/javascript'>
	
		function redireccion(pag) {
			document.location.href=pag;
		}

		function verificaDatos(){
			alert('llego a verificaDatos');
			var v_usu  = $("#USUARIO").val();
			var v_con  = $("#CONTRASENA").val();
			var v_con1 = hex_md5(v_con);

			<?php 

			$v_con = "<script>document.write(v_usu)</script>";
			$v_usu = "<script>document.write(v_con);</script>";

			header('Location: php/login.php?v_usu='.$v_con.'&v_con='.$v_con);
			// session_start(); 
			//               $_SESSION['v_usu'] = "<script> document.write(v_usu); </script>"; 
			//               $_SESSION['v_con'] = "<script> document.write(v_con); </script>"; 
			 ?>

			// pagina = "php/login.php"; //&v_usu="+v_usu+"?v_con="+v_con;
			// alert('pagina ='+pagina);
			// setTimeout("redireccion(pagina)",1);
		
		}
		




		//php/login.php
	</script>
</html>	
