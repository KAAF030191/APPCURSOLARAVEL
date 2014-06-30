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

	public function actionEditar()
	{
		return View::make('/usuario/editar');
	}

	public function actionVer()
	{
		return View::make('/usuario/ver');
	}

	public function actionEliminar()
	{
		return View::make('/usuario/eliminar');
	}
}
?>