<?php
class IndexController extends BaseController
{
	public function actionIndex()
	{
		return View::make('/index');
	}

	public function actionEjemploBlade()
	{
		return View::make('/ejemploblade');
	}
}
?>