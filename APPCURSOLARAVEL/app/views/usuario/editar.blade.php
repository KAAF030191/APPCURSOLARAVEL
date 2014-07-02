@extends('template')

@section('sectionCuerpo')
	<h2>Editar</h2>
	<form action="/APPCURSOLARAVEL/public/usuario/editar" method="post">
		<input type="hidden" id="txtIdUsuario" name="txtIdUsuario" value="{{$tUsuario->idUsuario}}">
		<label for="txtNombre">Nombre</label>
		<br>
		<input type="text" id="txtNombre" name="txtNombre" value="{{$tUsuario->nombre}}">
		<br>
		<label for="txtApellido">Apellido</label>
		<br>
		<input type="text" id="txtApellido" name="txtApellido" value="{{$tUsuario->apellido}}">
		<br>
		<label for="txtCorreoElectronico">Correo electrónico</label>
		<br>
		<input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico" value="{{$tUsuario->correoElectronico}}">
		<br>
		<label for="txtFechaNacimiento">Fecha de nacimiento</label>
		<br>
		<input type="date" id="txtFechaNacimiento" name="txtFechaNacimiento" value="{{$tUsuario->fechaNacimiento}}">
		<br>
		<label>Sexo</label>
		<br>
		<label for="radioSexoM">Masculino</label>
		<input type="radio" id="radioSexoM" name="radioSexo" value="1" {{$tUsuario->sexo==1 ? 'checked=true' : ''}}>
		<label for="radioSexoF">Femenino</label>
		<input type="radio" id="radioSexoF" name="radioSexo" value="0" {{$tUsuario->sexo==0 ? 'checked=true' : ''}}>
		<br>
		<input type="submit" value="Guardar cambios">
	</form>
@stop