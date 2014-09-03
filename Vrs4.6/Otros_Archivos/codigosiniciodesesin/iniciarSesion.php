<?php
//require_once("Operaciones.php");

class IniciarSesion
{
  public static function main()
  { 
	//$oper=new Operaciones;
	$user=$_POST['usuario'];
	$password=hash('sha256',$_POST['contrasena']);
	$consulta="select usu.cuenta, usu.clave, pa.perfil from usuarios usu, perfiles_asignados pa where pa.usuario=usu.codigo and usu.cuenta='".$user."' and usu.clave='".$password."'";
	$servidor='localhost';
	$port='5432';
	$db='bdsamyv';
	$usuario='samyv';
	$pass='hola';        
	$connection_string = 'host='.$servidor.' port='.$port.' dbname='.$db.' user='.$usuario.' password='.$pass;
     $conectado=pg_pconnect($connection_string) or die('No se pudo conectar');
	$resultado = pg_exec($consulta);
	$linea = pg_fetch_array($resultado, null, PGSQL_ASSOC);
	$perfil=$linea['perfil'];	
//	$resultado=Operaciones::consultar_especifico($consulta);
	if(pg_num_rows($resultado)<=0){
		echo "	<script type=\"text/javascript\">alert(\"Datos incorrectos\");exit;</script>";
		echo "	<script LANGUAGE=\"JavaScript\">
			var pagina=\"javascript:history.back(2);\"
			function redireccionar() 
			{location.href=pagina}
			setTimeout (\"redireccionar()\", 0);
			</script>";	
	}
	else{
		session_start(); 
		$_SESSION['usuario'] = $user; 
		$_SESSION['estado'] = 'Autenticado';
		$_SESSION['perfil'] = $perfil;		 		
		header('Location:../../inicio2.php');
	}	
	

  }

}
  IniciarSesion::main();
?>
