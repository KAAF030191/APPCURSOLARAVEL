@extends('template')

@section('sectionCuerpo')
	{{Form::open(array('action' => array('IndexController@actionEjemploBlade'), 'method' => 'post'))}}
		{{Form::label('txtNombreCompleto', 'Nombre Completo')}}
		<br>
		{{Form::text('txtNombreCompleto')}}
		<br>
		{{Form::label('passContrasenia', 'Contraseña')}}
		<br>
		{{Form::password('passContrasenia')}}
		<br>
		{{Form::label('checkConocimiento', 'Temas que conozco')}}
		<br>
		{{Form::label('checkConocimientoJava', 'Java')}}
		{{Form::checkbox('checkConocimiento', 'Java', false, array('id' => 'checkConocimientoJava'))}}
		{{Form::label('checkConocimientoCSharp', 'CSharp')}}
		{{Form::checkbox('checkConocimiento', 'CSharp', false, array('id' => 'checkConocimientoCSharp'))}}
		{{Form::label('checkConocimientoPhp', 'Php')}}
		{{Form::checkbox('checkConocimiento', 'Php', false, array('id' => 'checkConocimientoPhp'))}}
		{{Form::label('checkConocimientoNode', 'Node')}}
		{{Form::checkbox('checkConocimiento', 'Node', false, array('id' => 'checkConocimientoNode'))}}
		{{Form::label('checkConocimientoRuby', 'Ruby')}}
		{{Form::checkbox('checkConocimiento', 'Ruby', false, array('id' => 'checkConocimientoRuby'))}}
		<br>
		{{Form::label('radioSexo', 'Sexo')}}
		<br>
		{{Form::label('radioSexoM', 'Masculino')}}
		{{Form::radio('radioSexo', 'Masculino', true, array('id' => 'radioSexoM'))}}
		{{Form::label('radioSexoF', 'Femenino')}}
		{{Form::radio('radioSexo', 'Femenino', false, array('id' => 'radioSexoF'))}}
		<br>
		{{Form::label('btnSubirArchivo', 'Subir archivo')}}
		<br>
		{{Form::file('btnSubirArchivo')}}
		<br>
		{{Form::label('selectPais', 'País')}}
		<br>
		{{Form::select('selectPais', array(
			'peru' => 'Perú',
			'mexico' => 'México',
			'espania' => 'España',
			'venezuela' => 'Venezuela',
			'chile' => 'Chile',
			'colombia' => 'Colombia'))
		}}
		<br>
		{{Form::macro('miCampo', function($id)
		{
		    return "<input type='date' id='$id' name='$id'>";
		})}}
		{{Form::label('dateFechaNacimiento', 'Fecha de nacimiento')}}
		<br>
		{{Form::miCampo('dateFechaNacimiento')}}
		<br>
		{{Form::submit('Enviar formulario')}}
	{{Form::close()}}

	<hr><!--El código anterior es equivalente al siguiente código*/-->

	<form action="/APPCURSOLARAVEL/public/ejemploblade" method="post">
		<label for="txtNombreCompleto">Nombre completo</label>
		<br>
		<input type="text" id="txtNombreCompleto" name="txtNombreCompleto">
		<br>
		<label for="passContrasenia">Contraseña</label>
		<br>
		<input type="text" id="passContrasenia" name="passContrasenia">
		<br>
		<label for="checkConocimiento">Temas que conozco</label>
		<br>
		<label for="checkConocimientoJava">Java</label>
		<input type="checkbox" id="checkConocimientoJava" name="checkConocimiento">
		<label for="checkConocimientoCSharp">CSharp</label>
		<input type="checkbox" id="checkConocimientoCSharp" name="checkConocimiento">
		<label for="checkConocimientoPhp">Php</label>
		<input type="checkbox" id="checkConocimientoPhp" name="checkConocimiento">
		<label for="checkConocimientoNode">Node</label>
		<input type="checkbox" id="checkConocimientoNode" name="checkConocimiento">
		<label for="checkConocimientoRuby">Ruby</label>
		<input type="checkbox" id="checkConocimientoRuby" name="checkConocimiento">
		<br>
		<label for="radioSexo">Sexo</label>
		<br>
		<label for="radioSexoM">Masculino</label>
		<input type="radio" id="radioSexoM" name="radioSexo" checked=true>
		<label for="radioSexoF">Femenino</label>
		<input type="radio" id="radioSexoF" name="radioSexo">
		<br>
		<label for="btnSubirArchivo">Subir archivo</label>
		<input type="file" id="btnSubirArchivo" name="btnSubirArchivo">
		<br>
		<label for="selectPais">País</label>
		<br>
		<select name="selectPais" id="selectPais">
			<option value="peru">Perú</option>
			<option value="mexico">México</option>
			<option value="espania">España</option>
			<option value="venezuela">Venezuela</option>
			<option value="chile">Chile</option>
			<option value="colombia">Colombia</option>
		</select>
		<br>
		<label for="dateFechaNacimiento">Fecha de nacimiento</label>
		<input type="date" id="dateFechaNacimiento" name="dateFechaNacimiento">
		<br>
		<input type="submit" value="Enviar formulario">
	</form>
@stop