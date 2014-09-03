<?php
	session_start();  
    include("conexion.php"); 
    require_once("../lib/dompdf/dompdf_config.inc.php");
    date_default_timezone_set ("America/Bogota");
    header('Content-Type: text/html; charset=UTF-8'); 
    //
    $TABLA  = strtoupper($_GET['TABLA']); 
    $CODIGO = $_GET['CODIGO'];   
    //
    // $html = "
    //         <head>
    //             <meta http-equiv='content-type' content='text/html; charset=UTF-8' />
    //             <link rel='stylesheet' type='text/css' href='css/estlosPdf.css'>
    //         <head>
    //         <html lang='es'><body> 
    //          ";                      
    //
	if($TABLA == 'GUIA_DOC'){
        $consulta = mysql_query("SELECT NOM_INST,NOM_DIRECTIVO,CARGO,MUNICIPIO,DIRECCION,TEL,EMAIL,FECHA,PREG_1,PREG_2,PREG_3,PREG_4,PREG_5,PREG_6,PREG_7 
                                   FROM ".$TABLA." 
                                  WHERE CODIGO = ".$CODIGO."
                                    AND ESTADO = 'S'
                                ;" ); 
        $resultado = mysql_fetch_array($consulta); 
        do{  
            $html = "
            <head>
                <link rel='stylesheet' type='text/css' href='../css/estlosPdf.css'>
            <head>
            <html lang='es'><body> 
             ";   
             
            $html .= "
            	<h2 class='tituloDep2'>Detalle Entrevista</h2>
            	<div class='encabezadoDetalle2'>
                    <h1 class='titulo2'>Datos B&aacute;sicos</h1>
                    <div class='linea2'>
                        <p class='encabezado2'>Nombre de la Instituci&oacute;n:</p> 
                        <p class='contenido2'>".$resultado['NOM_INST']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                        <p class='encabezado2'>Nombre del Directivo de la Instituci&oacute;n: </p> 
                        <p class='contenido2'>".$resultado['NOM_DIRECTIVO']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                        <p class='encabezado2'>Cargo:</p> 
                        <p class='contenido2'>".$resultado['CARGO']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                    	<p class='encabezado2'>Municipio:</p> 
                        <p class='contenido2'>".$resultado['MUNICIPIO']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
        	        	<p class='encabezado2'>Direcci&oacute;n:</p> 
        	            <p class='contenido2'>".$resultado['DIRECCION']."</p>
        	            </div>
                    <br />
                    <div class='linea2'>
        	        	<p class='encabezado2'>Tel&eacute;fono:</p> 
                        <p class='contenido2'>".$resultado['TEL']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
        	           <p class='encabezado2'>Correo Electr&oacute;nico:</p> 
                       <p class='contenido2'>".$resultado['EMAIL']."</p>
                    </div>
                    <br />    
                    <div class='linea2'>
        	           <p class='encabezado2'>Fecha de Creaci&oacute;n:</p> 
                       <p class='contenido2'>".$resultado['FECHA']."</p>
                    </div> 
                </div>
                <div class='presentacionDetalle2'>    
                    <h1 class='titulo2'>Preguntas</h1>
                    <br />
                    <p class='pregDetalle2'>1. C&oacute;mo consideran la atenci&oacute;n domiciliaria dentro de la prestaci&oacute;n de los servicios de salud. (Perspectiva del servicio)</p>
                    <p class='rta2'>".$resultado['PREG_1']."</p>
                    <br />
                    <p class='pregDetalle2'>2. Cu&aacute;l es el modelo de atenci&oacute;n domiciliaria que caracteriza la instituci&oacute;n. (Orientado a la persona, a la familia, garantizar una atenci&oacute;n integral y continua, gestionar recursos sanitarios para la atenci&oacute;n de los problemas).</p>
                    <p class='rta2'>".$resultado['PREG_2']."</p>
                    <br />
                    <p class='pregDetalle2'>3. C&oacute;mo directivo del programa cu&aacute;l es su perspectiva sobre este modelo de atenci&oacute;n. (c&oacute;mo lo considera).</p>
                    <p class='rta2'>".$resultado['PREG_3']."</p>
                    <br />
                    <p class='pregDetalle2'>4. Qu&eacute; modalidad de Atenci&oacute;n domiciliaria tienen como proveedores de este servicio. Hospitalizaci&oacute;n domiciliaria (complejidad, intensidad y duraci&oacute;n, comparables con la hospitalizaci&oacute;n convencional, vertical, concreta en situaciones de crisis y bajo la responsabilidad del hospital a que pertenece), Atenci&oacute;n domiciliaria (atenci&oacute;n longitudinal, integral y continuada).</p>
                    <p class='rta2'>".$resultado['PREG_4']."</p>
                    <br />
                    <p class='pregDetalle2'>5. Qu&eacute; perspectiva tiene sobre la modalidad de Atenci&oacute;n domiciliaria que se brinda.</p>
                    <p class='rta2'>".$resultado['PREG_5']."</p>
                    <br />
                    <p class='pregDetalle2'>6. C&oacute;mo considera el nivel de desarrollo de los recursos disponibles para una atenci&oacute;n oportuna y eficaz (Recursos de todo tipo, humanos, materiales, transporte, medios tecnol&oacute;gicos, etc.).</p>
                    <p class='rta2'>".$resultado['PREG_6']."</p>
                    <br />
                    <p class='pregDetalle2'>7. C&oacute;mo considera las necesidades de cuidado de la poblaci&oacute;n frente a la capacidad de respuesta de la instituci&oacute;n. (Cubrimiento de los servicios de la Atenci&oacute;n Domiciliaria.)</p>
                    <p class='rta2'>".$resultado['PREG_7']."</p>
                </div>
                </body></html>
            ";
            $nomArchivo = "Entrev_Doc_Institucion_".$resultado['NOM_INST'].".pdf";
            //
	   }while ($resultado = mysql_fetch_array($consulta)); 
    }else{
        $consulta = mysql_query("SELECT NOM_INST,CARACTER,DIRECCION,TEL,EMAIL,REP_LEGAL,MUNICIPIO,FECHA,PREG_1,PREG_2,PREG_3,PREG_4,PREG_5,PREG_6,PREG_7,PREG_8,PREG_9,PREG_10,PREG_11,PREG_12                                      
                                   FROM ".$TABLA." 
                                  WHERE CODIGO = ".$CODIGO."
                                   AND ESTADO = 'S'
                                ;" ); 
        $resultado = mysql_fetch_array($consulta); 
        do{
            $html = "
            <head>
                <link rel='stylesheet' type='text/css' href='../css/estlosPdf.css'>
            <head>
            <html lang='es'><body> 
             ";   
             
            $html .= "
                <h2 class='tituloDep2'>Detalle Entrevista</h2>
                <div class='encabezadoDetalle2'>
                    <h1 class='titulo2'>Datos B&aacute;sicos</h1>
                    <div class='linea2'>
                        <p class='encabezado2'>Nombre de la Instituci&oacute;n:</p> 
                        <p class='contenido2'>".$resultado['NOM_INST']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                        <p class='encabezado2'>Representante Legal:</p> 
                        <p class='contenido2'>".$resultado['REP_LEGAL']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                        <p class='encabezado2'>C&aacute;racter:</p> 
                        <p class='contenido2'>".$resultado['CARACTER']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                        <p class='encabezado2'>Municipio:</p> 
                        <p class='contenido2'>".$resultado['MUNICIPIO']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                        <p class='encabezado2'>Direcci&oacute;n:</p> 
                        <p class='contenido2'>".$resultado['DIRECCION']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                        <p class='encabezado2'>Tel&eacute;fono:</p> 
                        <p class='contenido2'>".$resultado['TEL']."</p>
                    </div>
                    <br />
                    <div class='linea2'>
                       <p class='encabezado2'>Correo Electr&oacute;nico:</p> 
                       <p class='contenido2'>".$resultado['EMAIL']."</p>
                    </div> 
                    <br />   
                    <div class='linea2'>
                        <p class='encabezado2'>Fecha de Creaci&oacute;n:</p> 
                        <p class='contenido2'>".$resultado['FECHA']."</p>
                    </div> 
                </div>
                <div class='presentacionDetalle2'>    
                    <h1 class='titulo2'>Preguntas</h1>
                    <br />
                    <p class='pregDetalle2'>1. Cu&aacute;les son los prop&oacute;sitos u objetivos del programa.</p>
                    <p class='rta2'>".$resultado['PREG_1']."</p>
                    <br />
                    <p class='pregDetalle2'>2. Cu&aacute;l es su Filosof&iacute;a: En cuanto a principios, misi&oacute;n, visi&oacute;n y modelo de atenci&oacute;n entre otros.</p>
                    <p class='rta2'>".$resultado['PREG_2']."</p>
                    <br />
                    <p class='pregDetalle2'>3. Cu&aacute;les son las principales actividades que se realizan en el programa: Promoci&oacute;n y Prevenci&oacute;n,  actividades asistenciales, de rehabilitaci&oacute;n (Detallar la actividad en cada caso).</p>
                    <p class='rta2'>".$resultado['PREG_3']."</p>
                    <br />
                    <p class='pregDetalle2'>4. Cu&aacute;les son los usuarios del programa: De alta hospitalaria, inmovilizados por cualquier motivo (Neurol&oacute;gico, reumatol&oacute;gicos y deterioro cognitivo), personas en situaci&oacute;n terminal y cuidadores informales.</p>
                    <p class='rta2'>".$resultado['PREG_4']."</p>
                    <br />
                    <p class='pregDetalle2'>5. Cu&aacute;les son las necesidades de cuidado que demandan mayor atenci&oacute;n en la regi&oacute;n. (Indagaci&oacute;n documental)</p>
                    <p class='rta2'>".$resultado['PREG_5']."</p>
                    <br />
                    <p class='pregDetalle2'>6. C&oacute;mo es la relaci&oacute;n con las instituciones de salud a nivel municipal y departamental. (Coordinaci&oacute;n y referencia de pacientes)</p>
                    <p class='rta2'>".$resultado['PREG_6']."</p>
                    <br />
                    <p class='pregDetalle2'>7. C&oacute;mo se desarrolla el programa: En cuanto a visitas programadas y a demanda, consultas telef&oacute;nicas, espacios de agenda espec&iacute;fica, sistema de valoraci&oacute;n, seguimiento y registro, sistema de informaci&oacute;n y de evaluaci&oacute;n, entre otras.</p>
                    <p class='rta2'>".$resultado['PREG_7']."</p>
                    <br />
                    <p class='pregDetalle2'>8. Costo aproximado de la Atenci&oacute;n Domiciliaria:  por consulta o paquetes de atenci&oacute;n u otros.</p>
                    <p class='rta2'>".$resultado['PREG_8']."</p>
                    <br />
                    <p class='pregDetalle2'>9. Cu&aacute;l es el recurso humano o equipo de Atenci&oacute;n Domiciliaria: Interno y externo, principales funciones de cada uno.</p>
                    <p class='rta2'>".$resultado['PREG_9']."</p>
                    <br />
                    <p class='pregDetalle2'>10. Cu&aacute;l es el recurso material disponible:  Equipos, materiales, medicamentos, veh&iacute;culos, medios tecnol&oacute;gicos, etc.</p>
                    <p class='rta2'>".$resultado['PREG_10']."</p>
                    <br />
                    <p class='pregDetalle2'>11. Cu&aacute;l es el recurso financiero que soporta el programa:  Propios, donaciones</p>
                    <p class='rta2'>".$resultado['PREG_11']."</p>
                    <br />
                    <p class='pregDetalle2'>12. La organizaci&oacute;n tiene requerimientos espec&iacute;ficos para  la prestaci&oacute;n del 
                        servicio: <br>
                        <strong>Ejemplo:</strong> <br><strong>Formaci&oacute;n:</strong> Profesionales formados en atenci&oacute;n geri&aacute;trica 
                        y paliativa. <br><strong>Investigaci&oacute;n:</strong> Con el fin de fundamentar la pr&aacute;ctica en las mejores 
                        evidencias disponibles. <br><strong>Evaluaci&oacute;n:</strong> Procesos, final, costo/beneficio, para mejorar 
                        la calidad de la atenci&oacute;n.
                    </p>
                    <p class='rta2'>".$resultado['PREG_12']."</p>
                </div>
                </body></html>
            ";
            $nomArchivo = "Entrev_Est_Institucion_".$resultado['NOM_INST'].".pdf";
            //   
        }while ($resultado = mysql_fetch_array($consulta)); 
    }

	// $html .="</body></html>";

	// echo $html;

	$dompdf = new DOMPDF(); 
    $dompdf->load_html($html); 
    $dompdf->render(); 
    $dompdf->stream($nomArchivo);
?>