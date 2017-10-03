<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/farma.css') }}">

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="/img/logo.png" alt=""></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">HOME</a></li>
					<li><a href="">TESTE</a></li>
					<li><a href="">TESTE</a></li>
					
					<li>
						<form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Pesquisar">
							</div>
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
						</form>
					</li>

					<li><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> CARRINHO</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>DIEGO <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Meus dados</a></li>
							<li class="active"><a href="#">Meus pedidos</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')

	<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
	<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js') }}"></script>
</body>
</html>