<?php
class UsuarioController extends BaseController
{
	public function actionRegistrar()
	{
		if($_POST)
		{
			$tUsuario=new TUsuario;

			$tUsuario->nombre=Input::get('txtNombre');
			$tUsuario->apellido=Input::get('txtApellido');
			$tUsuario->correoElectronico=Input::get('txtCorreoElectronico');
			$tUsuario->contrasenia=Input::get('txtContrasenia');
			$tUsuario->fechaNacimiento=Input::get('txtFechaNacimiento');
			$tUsuario->sexo=Input::get('radioSexo');

			$tUsuario->save();

			return View::make('/usuario/registrar');
		}
		
		return View::make('/usuario/registrar');
	}

	public function actionEditar($idUsuario=null)
	{
		if($_POST)
		{
			TUsuario::where('idUsuario', '=', Input::get('txtIdUsuario'))->update
			(
				array
				(
					'nombre' => Input::get('txtNombre'),
					'apellido' => Input::get('txtApellido'),
					'correoElectronico' => Input::get('txtCorreoElectronico'),
					'fechaNacimiento' => Input::get('txtFechaNacimiento'),
					'sexo' => Input::get('radioSexo')
				)
			);

			return Redirect::to('/usuario/ver');
		}

		$tUsuario=TUsuario::find($idUsuario);

		return View::make('/usuario/editar', array('tUsuario' => $tUsuario));
	}

	public function actionVer()
	{
		$listaTUsuario=TUsuario::all();

		return View::make('/usuario/ver', array('listaTUsuario' => $listaTUsuario));
	}

	public function actionEliminar()
	{
		return View::make('/usuario/eliminar');
	}
}
?>