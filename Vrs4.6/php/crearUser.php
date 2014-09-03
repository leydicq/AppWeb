<?php
session_start();  
include("conexion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/estlosMain.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script src="http://pajhome.org.uk/crypt/md5/2.2/md5-min.js"></script> -->
    <script type="text/javascript" src="lib/crypt/md5/2.2/md5-min.js"></script>
    
    <script type="text/javascript">
        function cancelar(){
             $("#tablaMain").load("php/adminUsuarios.php");
        }
        function valUser(){
            var v_cod  = $("#v_codigo").val();
            var v_usu  = $("#v_usuario").val();
            var v_nom  = $("#nombre").val();
            var v_ape  = $("#apellido").val();
            var v_ema  = $("#email").val();
            var v_rol  = $("#rol").val();
            var v_con  = $("#v_contrasena").val();
            var v_vco  = $("#conf_contrasena").val();
            var v_con1 = hex_md5(v_con);
            var v_vco1 = hex_md5(v_vco);
            $("#tablaMain").load("php/insertarUser.php?v_cod="+v_cod+"&v_usu="+v_usu+"&v_nom="+v_nom+"&v_ape="+v_ape+"&v_ema="+v_ema+"&v_rol="+v_rol+"&v_con="+v_con1+"&v_vco="+v_vco1);
        };

        function verificaDatos(){
            var v_usuario              = $("#v_usuario").val();
            var nombre                 = $("#nombre").val();
            var apellido               = $("#apellido").val();
            var email                  = $("#email").val();
            var validacion_email       = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/; 
            var v_contrasena           = $("#v_contrasena").val();
            var conf_contrasena        = $("#conf_contrasena").val();
            //
            if (v_usuario == "") {
                alert("Digite el Nombre de Usuario a crear.");
                $("#v_usuario").focus();
                return false;
            }
            else if(nombre == ""){
                alert("Digite su Nombre.");
                $("#nombre").focus();
                return false;
            }
            else if(apellido == ""){
                alert("Digite su Apellido.");
                $("#apellido").focus();
                return false;
            }
            else if(email == "" || !validacion_email.test(email)){
                alert("Digite correctamente su Correo Electrónico.");
                $("#email").focus();
                return false;
            }
            else if(v_contrasena == ""){
                alert("Digite su Clave.");
                $("#v_contrasena").focus();
                return false;
            }
            else if(conf_contrasena == ""){
                alert("Digite nuevamente su Clave.");
                $("#conf_contrasena").focus();
                return false;
            }
            else if(v_contrasena != conf_contrasena){
                alert("¡La contraseñas ingresadas al sistema son distintas!");
                $("#v_contrasena").focus();
                return false;
            }
            else{
                valUser();
            }
        };
    </script>
</head>
<body>
    <h2 class="tituloDep">Modificar Usuarios</h2>
    <form id="infoUser" action="#" method="POST"> 
        <input id="v_codigo" type="hidden" name="CODIGO" value="0">
        <label for="v_usuario">Nombre de Usuario:</label><br />
        <input id="v_usuario" name="V_USUARIO" type="text" placeholder="" ><br />
        <label for="nombre">Nombre:</label><br />
        <input id="nombre" name="NOMBRE" type="text" placeholder="" ><br />
        <label for="apellido">Apellido:</label><br />                
        <input id="apellido" name="APELLIDO" type="text" placeholder="" ><br />
        <label for="email">Correo Electr&oacute;nico:</label><br />
        <input id="email" name="EMAIL" type="text" placeholder="" ><br />
        <label for="rol">Tipo de Rol:</label><br />
        <select id="rol" name="ROL">
            <option values="ADMINISTRADOR">Administrador</option>
            <option values="CONSULTA" selected>Consulta</option>';          
        </select><br />
        <label for="v_contrasena">Contrase&ntilde;a:</label><br />
        <input id="v_contrasena" name="V_CONTRASENA" type="password" placeholder="" value="" ><br />
        <label for="conf_contrasena">Confirmar Contrase&ntilde;a:</label><br />
        <input id="conf_contrasena" name="CONF_CONTRASENA" type="password" placeholder="" value="" ><br />
        <input class="botones_creauser" type="button"  value="Guardar" id="b_creaUser" onclick="verificaDatos()" />
        <input class="botones_creauser" type="button" value="Cancelar" id="b_cancelar" onclick="cancelar()" />
    </form>
</body>	
</html>