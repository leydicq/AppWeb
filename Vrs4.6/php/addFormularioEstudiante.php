<?php
	echo ' 
		<form id="addFomularioEstudiante" action="php/insertarinfoguiaestu.php" method="POST">

		<input type="hidden" name="CODIGO" value="0">
		
		<div class="datos_basicos">
		<h2 class="tituloDep">Gu&iacute;a de Trabajo Estudiante</h2> 
		<br />
		<h1>Datos B&aacute;sicos</h1>

			<div class="Datos_encuesta">
			<label for="nombreinstitucion">Nombre de la Instituci&oacute;n:</label>
			<input id="nombreinstitucion" name="NOM_INST" type="text" placeholder="" class="" required>
			</div>
			
			<div class="Datos_encuesta_">
			<label for="caracter">Car&aacute;cter:</label>

		 	<input type="radio" id="radio1" name="CARACTER" value="publico" checked>
	   			<label for="radio1">P&uacute;blico</label>
			<input type="radio" id="radio2" name="CARACTER"value="privado">
	   			<label for="radio2">Privado</label>
		 	</div>

			<div class="Datos_encuesta">
			<label for="direccion">Dirección:</label>
		    <input id="direccion" name="DIRECCION" type="text" placeholder="" class="">
		    </div>		

			<div class="Datos_encuesta">
			<label for="municipio">Municipio:</label>
			<select id="municipio" name="MUNICIPIO">
				<option values="Acacias">Acacias</option>
				<option values="Cumaral">Cumaral</option>
				<option values="Granada">Granada</option>
				<option values="Villavicencio" selected>Villavicencio</option>
			</select>
			</div>

		    <div class="Datos_encuesta">
		    <label for="telefono">Teléfono:</label>
		    <input id="telefono" name="TEL" type="text" placeholder="" class="">
			</div>

			<div class="Datos_encuesta">
			<label for="email">Correo Electrónico:</label>
			<input id="email" name="EMAIL" type="email" placeholder="" class="">
			</div>

			<div class="Datos_encuesta">
			<label for="nombrerepresentante">Representante Legal:</label>
			<input id="nombrerepresentante" name="REP_LEGAL" type="text" placeholder="" class="">
			</div>
		</div>

		<div class="core_encuesta">
			<h1>Preguntas</h1>	

			<div class="preguntas">
			<label for="pregunta1"><p>1. Cuáles son los propósitos u objetivos del programa.</p></label>
			<textarea id="pregunta1" name="PREG_1" class="" cols="30" rows="10"></textarea>
			</div>

			<div class="preguntas">
			<label for="pregunta2"><p>2. Cuál es su Filosofía: En cuanto a principios, misión, visión y modelo de atención entre otros.</p></label>
			<textarea id="pregunta2" name="PREG_2" class="" cols="30" rows="10"></textarea>
			</div>

			<div class="preguntas">
			<label for="pregunta3"><p>3. Cuáles son las principales actividades que se realizan en el programa: Promoción y Prevención,  actividades asistenciales, de rehabilitación (Detallar la actividad en cada caso).</p></label>
		    <textarea id="pregunta3" name="PREG_3" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    <label for="pregunta4"><p>4. Cuáles son los usuarios del programa: De alta hospitalaria, inmovilizados por cualquier motivo (Neurológico, reumatológicos y deterioro cognitivo), personas en situación terminal y cuidadores informales.</p></label>
		    <textarea id="pregunta4" name="PREG_4" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    <label for="pregunta5"><p>5. Cuáles son las necesidades de cuidado que demandan mayor atención en la región. (Indagación documental)</p></label>
		    <textarea id="pregunta5" name="PREG_5" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
			<label for="pregunta6"><p>6. Cómo es la relación con las instituciones de salud a nivel municipal y departamental. (Coordinación y referencia de pacientes)</p></label>
		    <textarea id="pregunta6" name="PREG_6" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    <label for="pregunta7"><p>7. Cómo se desarrolla el programa: En cuanto a visitas programadas y a demanda, consultas telefónicas, espacios de agenda específica, sistema de valoración, seguimiento y registro, sistema de información y de evaluación, entre otras.</p></label>
		    <textarea id="pregunta7" name="PREG_7" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    <label for="pregunta8"><p>8. Costo aproximado de la Atención Domiciliaria:  por consulta o paquetes de atención u otros.</p></label>
		    <textarea id="pregunta8" name="PREG_8" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    <label for="pregunta9"><p>9. Cuál es el recurso humano o equipo de Atención Domiciliaria: Interno y externo, principales funciones de cada uno.</p></label>
		    <textarea id="pregunta9" name="PREG_9" class="" cols="30" rows="10"></textarea>
		    </div>

			<div class="preguntas">
		    <label for="pregunta10"><p>10. Cuál es el recurso material disponible:  Equipos, materiales, medicamentos, vehículos, medios tecnológicos, etc.</p></label>
		    <textarea id="pregunta10" name="PREG_10" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    <label for="pregunta11"><p>11. Cuál es el recurso financiero que soporta el programa:  Propios, donaciones</p></label>
		    <textarea id="pregunta11" name="PREG_11" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    <label for="pregunta12"><p>12. La organización tiene requerimientos específicos para  la prestación del 
		    	servicio: <br>
				<strong>Ejemplo:</strong> <br><strong>Formación:</strong> Profesionales formados en atención geriátrica 
				y paliativa. <br><strong>Investigación:</strong> Con el fin de fundamentar la práctica en las mejores 
				evidencias disponibles. <br><strong>Evaluación:</strong> Procesos, final, costo/beneficio, para mejorar 
				la calidad de la atención.
			</p></label>
		    <textarea id="pregunta12" name="PREG_12" class="" cols="30" rows="10"></textarea>
		    </div>

		    <div class="preguntas">
		    	<input type="submit" value="Guardar" onClick="validaFormulario(1)" id="boton_envio">
		    </div>	
		 </div>
		</form>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#boton_envio").click(function() {
					
					var nombreinstitucion = $("#nombreinstitucion").val();
					var nombrerepresentante = $("#nombrerepresentante").val();
					var email = $("#email").val();
            		var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            		var pregunta1 = $("#pregunta1").val();
			        var pregunta2 = $("#pregunta2").val();
			        var pregunta3 = $("#pregunta3").val();
			        var pregunta4 = $("#pregunta4").val();
			        var pregunta5 = $("#pregunta5").val();
			        var pregunta6 = $("#pregunta6").val();
			        var pregunta7 = $("#pregunta7").val();
			        var pregunta8 = $("#pregunta8").val();
			        var pregunta9 = $("#pregunta9").val();
			        var pregunta10 = $("#pregunta10").val();
			        var pregunta11 = $("#pregunta11").val();
			        var pregunta12 = $("#pregunta12").val();

			        if (nombreinstitucion == "") {
						$("#nombreinstitucion").focus();
			            return false;
			        }
			        else if(nombrerepresentante == ""){
			        	$("#nombrerepresentante").focus();
			            return false;
			        }
			        else if(email == "" || !validacion_email.test(email)){
			        	alert("Digite correctamente su Correo Electrónico.");
			        	$("#email").focus();
			            return false;
			        }
			        else if(pregunta1 == ""){
			        	$("#pregunta1").focus();
			            return false;
			        }
			        else if(pregunta2 == ""){
			        	$("#pregunta2").focus();
			            return false;
			        }
			        else if(pregunta3 == ""){
			        	$("#pregunta3").focus();
			            return false;
			        }
			        else if(pregunta4 == ""){
			        	$("#pregunta4").focus();
			            return false;
			        }
			        else if(pregunta5 == ""){
			        	$("#pregunta5").focus();
			            return false;
			        }
			        else if(pregunta6 == ""){
			        	$("#pregunta6").focus();
			            return false;
			        }
			        else if(pregunta7 == ""){
			        	$("#pregunta7").focus();
			            return false;
			        }
			        else if(pregunta8 == ""){
			        	$("#pregunta8").focus();
			            return false;
			        }
			        else if(pregunta9 == ""){
			        	$("#pregunta9").focus();
			            return false;
			        }
			        else if(pregunta10 == ""){
			        	$("#pregunta10").focus();
			            return false;
			        }
			        else if(pregunta11 == ""){
			        	$("#pregunta11").focus();
			            return false;
			        }
			        else if(pregunta12 == ""){
			        	$("#pregunta12").focus();
			            return false;
			        }
				else{
			       	$.ajax({
			            type: "POST",
			            url: "php/insertarinfoguiaestu.php",
			            data: $("#addFomularioEstudiante").serialize(),
			            success: success,
			            dataType: dataType				        
					 });	
					return false;
				}
			});		
		})();
		</script>
		';
	?>