@extends('template')

@section('sectionCuerpo')
	<h2>Registrar</h2>
	<form action="/APPCURSOLARAVEL/public/usuario/registrar" method="post">
		<label for="txtNombre">Nombre</label>
		<br>
		<input type="text" id="txtNombre" name="txtNombre">
		<br>
		<label for="txtApellido">Apellido</label>
		<br>
		<input type="text" id="txtApellido" name="txtApellido">
		<br>
		<label for="txtCorreoElectronico">Correo electrónico</label>
		<br>
		<input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico">
		<br>
		<label for="txtContrasenia">Contreseña</label>
		<br>
		<input type="password" id="txtContrasenia" name="txtContrasenia">
		<br>
		<label for="txtFechaNacimiento">Fecha de nacimiento</label>
		<br>
		<input type="date" id="txtFechaNacimiento" name="txtFechaNacimiento">
		<br>
		<label>Sexo</label>
		<br>
		<label for="radioSexoM">Masculino</label>
		<input type="radio" id="radioSexoM" name="radioSexo" value="1" checked=true>
		<label for="radioSexoF">Femenino</label>
		<input type="radio" id="radioSexoF" name="radioSexo" value="0">
		<br>
		<input type="submit" value="Registrar usuario">
	</form>
@stop