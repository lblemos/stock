<!DOCTYPE html>
<html>
<head>
<title>Listagem de Produtos</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/produtos"> Stock </a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{action('ProdutoController@listar')}}">Listagem</a></li>
				<li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<br /> <br /> <br /> @yield('conteudo') <br /> <br /> <br />
	</div>
	
	<footer class="well">
		<p>© Livro de Laravel da Casa do Código.</p>
	</footer>

</body>
</html>