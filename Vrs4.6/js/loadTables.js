$(document).ready(function(){
	$("#tablaMain").load("php/entrada.php");

	var contador=0;
	$(".click").click(function(){
		if(contador==0){
			$(".hiddenbox").css("display","block","opacity","1");
			contador=1;	
		}
		else{
			$(".hiddenbox").css("display","none","opacity","0");	
			contador=0;
		}
	});

	$(".hiddenbox").click(function(){
		contador=0;
		$(".hiddenbox").css("display","none","opacity","0");
	});

    
	$("#nuevoDoc").click(function(){
		$("#tablaMain").load("php/addFormularioDocente.php");
	});

	$("#nuevoEst").click(function(){
		$("#tablaMain").load("php/addFormularioEstudiante.php");
	});

	$(".divnombre").click(function(){
     window.location=$(this).find("a").attr("href"); 
     return false;
	});

	$("#ConsultaBase").click(function(){
		$("#tablaMain").load("php/consultabase.php");
	});

	$("#ConsultaDepar").click(function(){
		$("#tablaMain").load("php/menuMunicipios.php");
	});

	$("#ConsultaInst").click(function(){
		$("#tablaMain").load("php/consultaInst.php");
	});

	$("#ConsultaUsuarios").click(function(){
		$("#tablaMain").load("php/consultaUsuarios.php");
	});

	$("#Administracion").click(function(){
		$("#tablaMain").load("php/adminUsuarios.php");
	});

	
});