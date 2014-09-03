<?php
    session_start();  
    include("conexion.php"); 
    date_default_timezone_set ("America/Bogota");
    $TABLA  = strtoupper($_GET['TABLA']); 
    $CODIGO = $_GET['CODIGO'];    
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8' />
        <script type="text/javascript">
            $('.Volver').click(function() {
                    $('#mostrarDetalle').fadeOut().end().find('.window-container').removeClass('window-container-visible');
                    document.getElementById("ventanaModal").style.visibility="hidden";
                });
            //
            $("#borrar").click(function(){
                if(confirm('¿Desea Eliminar la Entrevista?')) 
                    $("#tablaMain").load("php/eliminaEntrevista.php?CODIGO=<?php echo $CODIGO ?>&TABLA=<?php echo $TABLA ?>");
                else 
                    null;
                 });
            //
            $("#editar").click(function(){
                $("#tablaMain").load("php/editaEntrevista.php?CODIGO=<?php echo $CODIGO ?>&TABLA=<?php echo $TABLA ?>");
            });
        </script>
    </head> 
    <body>
        <div class="encabezadoFijo">
            <div class="Volver"><a href="#"><img id="imgVolver" src="img/volver1.png" alt="Volver" title="Volver"></a></div>
            <a class="navButton"  id="borrar" href="#"><img src="img/eliminar.png" alt="Eliminar" title="Eliminar"></a>
            <a class="navButton"  id="descargar" href="php/descargarArchivo.php?CODIGO=<?php echo $CODIGO ?>&TABLA=<?php echo $TABLA ?>"><img src="img/descargar.png" alt="Descargar" title="Descargar"></a>
            <a class="navButton"  id="editar" href="#"><img src="img/editar_mini.png" alt="Editar" title="Editar"></a>
            <h2 class="tituloDep">Detalle</h2>
        </div>
        <?php
        if($TABLA == 'GUIA_DOC'){
            $consulta = mysql_query("SELECT NOM_INST,NOM_DIRECTIVO,CARGO,MUNICIPIO,DIRECCION,TEL,EMAIL,FECHA,PREG_1,PREG_2,PREG_3,PREG_4,PREG_5,PREG_6,PREG_7 
                                       FROM ".$TABLA." 
                                      WHERE CODIGO = ".$CODIGO."
                                        AND ESTADO = 'S'
                                    ;" ); 
            $resultado = mysql_fetch_array($consulta); 
            do{ 
        ?>                 
                <div class="encabezadoDetalle">
                    <h1>Datos B&aacute;sicos</h1>
                    <div class="linea">
                        <p class="encabezado">Nombre de la Instituci&oacute;n:</p> 
                        <p class="contenido"><?php echo $resultado['NOM_INST'];?></p>
                    </div>
                    <br />
                    <div class="linea">
                        <p class="encabezado">Nombre del Directivo de la Instituci&oacute;n: </p> 
                        <p class="contenido"><?php echo $resultado['NOM_DIRECTIVO'];?></p>
                    </div>
                    <br />
                    <div class="linea">
                        <p class="encabezado">Cargo:</p> 
                        <p class="contenido"><?php echo $resultado['CARGO'];?></p>
                    </div>
                    <br />
                    <div class="linea">    
                        <p class="encabezado">Municipio:</p> 
                        <p class="contenido"><?php echo $resultado['MUNICIPIO'];?></p>
                    </div>
                    <br />
                    <div class="linea">     
                        <p class="encabezado">Direcci&oacute;n:</p> 
                        <p class="contenido"><?php echo $resultado['DIRECCION'];?></p>
                    </div>
                    <br />
                    <div class="linea">    
                        <p class="encabezado">Telefono:</p> 
                        <p class="contenido"><?php echo $resultado['TEL'];?></p>
                    </div>
                    <br />
                    <div class="linea">
                        <p class="encabezado">Correo Electrónico:</p> 
                        <p class="contenido"><?php echo $resultado['EMAIL'];?></p>
                    </div>
                    <br />    
                    <div class="linea">
                        <p class="encabezado">Fecha de Creación:</p> 
                        <p class="contenido"><?php echo $resultado['FECHA'];?></p>
                    </div> 
                </div>
                <div class="presentacionDetalle">    
                    <h1>Preguntas</h1>
                    <br />
                    <p class="pregDetalle">1. Cómo consideran la atención domiciliaria dentro de la prestación de los servicios de salud. (Perspectiva del servicio)</p>
                    <p class="rta"><?php echo $resultado['PREG_1'];?></p>
                    <br />
                    <p class="pregDetalle">2. Cuál es el modelo de atención domiciliaria que caracteriza la institución. (Orientado a la persona, a la familia, garantizar una atención integral y continua, gestionar recursos sanitarios para la atención de los problemas).</p>
                    <p class="rta"><?php echo $resultado['PREG_2'];?></p>
                    <br />
                    <p class="pregDetalle">3. Como directivo del programa cuál es su perspectiva sobre este modelo de atención. (cómo lo considera).</p>
                    <p class="rta"><?php echo $resultado['PREG_3'];?></p>
                    <br />
                    <p class="pregDetalle">4. Que modalidad de Atención domiciliaria tienen como proveedores de este servicio. Hospitalización domiciliaria (complejidad, intensidad y duración, comparables con la hospitalización convencional, vertical, concreta en situaciones de crisis y bajo la responsabilidad del hospital a que pertenece), Atención domiciliaria (atención longitudinal, integral y continuada).</p>
                    <p class="rta"><?php echo $resultado['PREG_4'];?></p>
                    <br />
                    <p class="pregDetalle">5. Que perspectiva tiene sobre la modalidad de Atención domiciliaria que se brinda.</p>
                    <p class="rta"><?php echo $resultado['PREG_5'];?></p>
                    <br />
                    <p class="pregDetalle">6. Cómo considera el nivel de desarrollo de los recursos disponibles para una atención oportuna y eficaz (Recursos de todo tipo, humanos, materiales, transporte, medios tecnológicos, etc.).</p>
                    <p class="rta"><?php echo $resultado['PREG_6'];?></p>
                    <br />
                    <p class="pregDetalle">7. Como considera las necesidades de cuidado de la población frente a la capacidad de respuesta de la institución. (Cubrimiento de los servicios de la Atención Domiciliaria.)</p>
                    <p class="rta"><?php echo $resultado['PREG_7'];?></p>
                </div>
            <?php
            }while ($resultado = mysql_fetch_array($consulta));     
        }else{ 
            $consulta = mysql_query("SELECT NOM_INST,CARACTER,DIRECCION,TEL,EMAIL,REP_LEGAL,MUNICIPIO,FECHA,PREG_1,PREG_2,PREG_3,PREG_4,PREG_5,PREG_6,PREG_7,PREG_8,PREG_9,PREG_10,PREG_11,PREG_12                                      
                                       FROM ".$TABLA." 
                                      WHERE CODIGO = ".$CODIGO."
                                       AND ESTADO = 'S'
                                    ;" ); 
            $resultado = mysql_fetch_array($consulta); 
            do{
        ?>
                <div class="encabezadoDetalle">
                    <h1>Datos B&aacute;sicos</h1>
                    <div class="linea">
                        <p class="encabezado">Nombre de la Instituci&oacute;n:</p> 
                        <p class="contenido"><?php echo $resultado['NOM_INST'];?></p>
                    </div>
                    <br />
                    <div class="linea">
                        <p class="encabezado">Representante Legal:</p> 
                        <p class="contenido"><?php echo $resultado['REP_LEGAL'];?></p>
                    </div>
                    <br />
                    <div class="linea">
                        <p class="encabezado">Cáracter:</p> 
                        <p class="contenido"><?php echo $resultado['CARACTER'];?></p>
                    </div>
                    <br />
                    <div class="linea">    
                        <p class="encabezado">Municipio:</p> 
                        <p class="contenido"><?php echo $resultado['MUNICIPIO'];?></p>
                    </div>
                    <br />
                    <div class="linea">     
                        <p class="encabezado">Direcci&oacute;n:</p> 
                        <p class="contenido"><?php echo $resultado['DIRECCION'];?></p>
                    </div>
                    <br />
                    <div class="linea">    
                        <p class="encabezado">Telefono:</p> 
                        <p class="contenido"><?php echo $resultado['TEL'];?></p>
                    </div>
                    <br />
                    <div class="linea">
                        <p class="encabezado">Correo Electrónico:</p> 
                        <p class="contenido"><?php echo $resultado['EMAIL'];?></p>
                    </div> 
                    <br />   
                    <div class="linea">
                        <p class="encabezado">Fecha de Creación:</p> 
                        <p class="contenido"><?php echo $resultado['FECHA'];?></p>
                    </div> 
                </div>
                <div class="presentacionDetalle">    
                    <h1>Preguntas</h1>
                    <br />
                    <p class="pregDetalle">1. Cuáles son los propósitos u objetivos del programa.</p>
                    <p class="rta"><?php echo $resultado['PREG_1'];?></p>
                    <br />
                    <p class="pregDetalle">2. Cuál es su Filosofía: En cuanto a principios, misión, visión y modelo de atención entre otros.</p>
                    <p class="rta"><?php echo $resultado['PREG_2'];?></p>
                    <br />
                    <p class="pregDetalle">3. Cuáles son las principales actividades que se realizan en el programa: Promoción y Prevención,  actividades asistenciales, de rehabilitación (Detallar la actividad en cada caso).</p>
                    <p class="rta"><?php echo $resultado['PREG_3'];?></p>
                    <br />
                    <p class="pregDetalle">4. Cuáles son los usuarios del programa: De alta hospitalaria, inmovilizados por cualquier motivo (Neurológico, reumatológicos y deterioro cognitivo), personas en situación terminal y cuidadores informales.</p>
                    <p class="rta"><?php echo $resultado['PREG_4'];?></p>
                    <br />
                    <p class="pregDetalle">5. Cuáles son las necesidades de cuidado que demandan mayor atención en la región. (Indagación documental)</p>
                    <p class="rta"><?php echo $resultado['PREG_5'];?></p>
                    <br />
                    <p class="pregDetalle">6. Cómo es la relación con las instituciones de salud a nivel municipal y departamental. (Coordinación y referencia de pacientes)</p>
                    <p class="rta"><?php echo $resultado['PREG_6'];?></p>
                    <br />
                    <p class="pregDetalle">7. Cómo se desarrolla el programa: En cuanto a visitas programadas y a demanda, consultas telefónicas, espacios de agenda específica, sistema de valoración, seguimiento y registro, sistema de información y de evaluación, entre otras.</p>
                    <p class="rta"><?php echo $resultado['PREG_7'];?></p>
                    <br />
                    <p class="pregDetalle">8. Costo aproximado de la Atención Domiciliaria:  por consulta o paquetes de atención u otros.</p>
                    <p class="rta"><?php echo $resultado['PREG_8'];?></p>
                    <br />
                    <p class="pregDetalle">9. Cuál es el recurso humano o equipo de Atención Domiciliaria: Interno y externo, principales funciones de cada uno.</p>
                    <p class="rta"><?php echo $resultado['PREG_9'];?></p>
                    <br />
                    <p class="pregDetalle">10. Cuál es el recurso material disponible:  Equipos, materiales, medicamentos, vehículos, medios tecnológicos, etc.</p>
                    <p class="rta"><?php echo $resultado['PREG_10'];?></p>
                    <br />
                    <p class="pregDetalle">11. Cuál es el recurso financiero que soporta el programa:  Propios, donaciones</p>
                    <p class="rta"><?php echo $resultado['PREG_11'];?></p>
                    <br />
                    <p class="pregDetalle">12. La organización tiene requerimientos específicos para  la prestación del 
                        servicio: <br>
                        <strong>Ejemplo:</strong> <br><strong>Formación:</strong> Profesionales formados en atención geriátrica 
                        y paliativa. <br><strong>Investigación:</strong> Con el fin de fundamentar la práctica en las mejores 
                        evidencias disponibles. <br><strong>Evaluación:</strong> Procesos, final, costo/beneficio, para mejorar 
                        la calidad de la atención.
                    </p>
                    <p class="rta"><?php echo $resultado['PREG_12'];?></p>
                </div>
        <?php
             }while ($resultado = mysql_fetch_array($consulta));         
        }
        ?>
    <?php mysql_close($conexion); ?>
    </body>
</html>