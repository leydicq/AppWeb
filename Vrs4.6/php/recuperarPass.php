<?php
  session_start();      
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/formstyle.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Recuperar Contraseña</h1>
      <form id='formulario2'  method="post" action="consultaPass.php">
        <p><input id="CORREO" type="text" name="CORREO" value="" placeholder="Su correo"></p>
        <p class="submit"><input type="submit" name="commit" value="Enviar"></p>
      </form>
    </div>
  </section>  
  </body>
</html>