<?php
class UsuarioController extends BaseController
{
	public function actionRegistrar()
	{
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