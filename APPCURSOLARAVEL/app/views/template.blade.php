<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	{{HTML::style('css/cssTemplate.css')}}
</head>
<body>
	<header>
		<h1>Esta es la cabecera</h1>
	</header>
	<nav id="menuPrincipal">
		<ul>
			<li>{{HTML::linkAction('IndexController@actionIndex', 'Inicio')}}</li>
			<li>{{HTML::linkAction('UsuarioController@actionRegistrar', 'Registrar usuario')}}</li>
			<li>{{HTML::linkAction('UsuarioController@actionVer', 'Ver usuario')}}</li>
			<li>{{HTML::linkAction('IndexController@actionEjemploBlade', 'Ejemplo de blade')}}</li>
		</ul>
	</nav>
	<section id="sectionCuerpoTemplate">
		@yield('sectionCuerpo')
	</section>
	<footer>
		&copy;En la Web de KAAF
	</footer>
</body>
</html>