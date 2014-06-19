<?php

Route::get('/', 'IndexController@actionIndex');
Route::any('/ejemploblade', 'IndexController@actionEjemploBlade');

Route::any('/usuario/registrar', 'UsuarioController@actionRegistrar');
Route::any('/usuario/editar', 'UsuarioController@actionEditar');
Route::any('/usuario/ver', 'UsuarioController@actionVer');
Route::any('/usuario/eliminar', 'UsuarioController@actionEliminar');