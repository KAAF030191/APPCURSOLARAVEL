@extends('template')

@section('sectionCuerpo')
	<h2>Ver</h2>
	<table border="1">
		<thead>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>CORREO ELECTRÓNICO</th>
			<th>CONTRASEÑA</th>
			<th>FECHA DE NACIMIENTO</th>
			<th>SEXO</th>
			<th>FECHA DE REGISTRO</th>
			<th>FECHA DE MODIFICACIÓN</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($listaTUsuario as $value)
				<tr>
					<td>{{$value->idUsuario}}</td>
					<td>{{$value->nombre}}</td>
					<td>{{$value->apellido}}</td>
					<td>{{$value->correoElectronico}}</td>
					<td>{{$value->contrasenia}}</td>
					<td>{{$value->fechaNacimiento}}</td>
					<td>{{$value->sexo=='1' ? 'Masculino' : 'Femenino'}}</td>
					<td>{{$value->fechaRegistro}}</td>
					<td>{{$value->fechaModificacion}}</td>
					<td><input type="button" id="{{$value->idUsuario}}" value="Editar" onclick="editarUsuario(this.id);"></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<script>
		function editarUsuario(idUsuario)
		{
			window.location.href="/APPCURSOLARAVEL/public/usuario/editar/"+idUsuario;
		}
	</script>
@stop