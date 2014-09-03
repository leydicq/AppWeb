<?php
	echo ' 
	<form id="addFormularioDocente" action="php/insertarinfoguiadoc.php" method="POST"> 
		
		<input type="hidden" name="CODIGO" value="0">

		<div class="datos_basicos">
		<h2 class="tituloDep">Gu&iacute;a de Trabajo Docente</h2>
		<br />
		<h1>Datos B&aacute;sicos</h1>

		<div class="Datos_encuesta">
		<label for="nombreinstitucion">Nombre de la Instituci&oacute;n:</label><br />
		<input id="nombreinstitucion" name="NOM_INST" type="text" placeholder="" class="" required>
		</div>

		<div class="Datos_encuesta">
		<label for="nombredirectivo">Nombre del Directivo de la Instituci&oacute;n:</label>
		<input id="nombredirectivo" name="NOM_DIRECTIVO" type="text" placeholder="" class="" required>
		</div>

		<div class="Datos_encuesta">
		<label for="cargo">Cargo:</label><br />
		<input id="cargo" name="CARGO" type="text" placeholder="" class="" >
		</div>

		<div class="Datos_encuesta">
		<label for="municipio">Municipio:</label><br />
		<select id="municipio" name="MUNICIPIO">
			<option values="Acacias">Acacias</option>
			<option values="Cumaral">Cumaral</option>
			<option values="Granada">Granada</option>
			<option values="Villavicencio" selected>Villavicencio</option>
		</select>
		</div>

		<div class="Datos_encuesta">
		<label for="direccion">Dirección:</label><br />
	    <input id="direccion" name="DIRECCION" type="text" placeholder="" class="">
	    </div>

	    <div class="Datos_encuesta">
	    <label for="telefono">Teléfono:</label><br />
	    <input id="telefono" name="TEL" type="text" placeholder="" class="">
		</div>

		<div class="Datos_encuesta">
		<label for="email">Correo Electrónico:</label><br />
		<input id="email" name="EMAIL" type="email" placeholder="" class="">
		</div>

		</div>

		<div class="core_encuesta">
		<h1>Preguntas</h1>

		<div class="preguntas">
		<label for="pregunta1"><p>1. Cómo consideran la atención domiciliaria dentro de la prestación de los servicios de salud. (Perspectiva del servicio)</p></label>
		<textarea id="pregunta1" name="PREG_1" cols="30" rows="10" required></textarea>
		</div>

		<div class="preguntas">
		<label for="pregunta2"><p>2. Cuál es el modelo de atención domiciliaria que caracteriza la institución. (Orientado a la persona, a la familia, garantizar una atención integral y continua, gestionar recursos sanitarios para la atención de los problemas).</p></label>
		<textarea id="pregunta2" name="PREG_2" class="" cols="30" rows="10" required></textarea>
		</div>

		<div class="preguntas">
		<label for="pregunta3"><p>3. Como directivo del programa cuál es su perspectiva sobre este modelo de atención. (cómo lo considera).</p></label>
	    <textarea id="pregunta3" name="PREG_3" class="" cols="30" rows="10" required></textarea>
	    </div>
	    
	    <div class="preguntas">
	    <label for="pregunta4"><p>4. Que modalidad de Atención domiciliaria tienen como proveedores de este servicio. Hospitalización domiciliaria (complejidad, intensidad y duración, comparables con la hospitalización convencional, vertical, concreta en situaciones de crisis y bajo la responsabilidad del hospital a que pertenece), Atención domiciliaria (atención longitudinal, integral y continuada).</p></label>
	    <textarea id="pregunta4" name="PREG_4" class="" cols="30" rows="10" required></textarea>
	    </div>

	    <div class="preguntas">
	    <label for="pregunta5"><p>5. Que perspectiva tiene sobre la modalidad de Atención domiciliaria que se brinda.</p></label>
	    <textarea id="pregunta5" name="PREG_5" class="" cols="30" rows="10" required></textarea>
		</div>

		<div class="preguntas">
		<label for="pregunta6"><p>6. Cómo considera el nivel de desarrollo de los recursos disponibles para una atención oportuna y eficaz (Recursos de todo tipo, humanos, materiales, transporte, medios tecnológicos, etc.).</p></label>
	    <textarea id="pregunta6" name="PREG_6" class="" cols="30" rows="10" required></textarea>
	    </div>

	    <div class="preguntas">
	    <label for="pregunta7"><p>7. Como considera las necesidades de cuidado de la población frente a la capacidad de respuesta de la institución. (Cubrimiento de los servicios de la Atención Domiciliaria.)</p></label>
	    <textarea id="pregunta7" name="PREG_7" class="" cols="30" rows="10" required></textarea>
	    </div>
	    <div class="preguntas">
	    <input id="boton_envio" onClick="validaFormulario(1)" type="submit" value="Guardar">
	    </div>
	    </div>
	</form>

	<script type="text/javascript">
			$(document).ready(function(){
				$("#boton_envio").click(function() {
					
					var nombreinstitucion = $("#nombreinstitucion").val();
					var nombredirectivo = $("#nombredirectivo").val();
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
			        else if(nombredirectivo == ""){
			        	$("#nombredirectivo").focus();
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
				else{
			       	$.ajax({
			            type: "POST",
			            url: "php/insertarinfoguiadoc.php",
			            data: $("#addFormularioDocente").serialize(),
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