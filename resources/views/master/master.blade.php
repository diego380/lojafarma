<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="icon" href="/img/shopping-cart.png">
	<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('/css/farma.css') }}">
	<link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Ubuntu+Mono') }}">
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
				<a class="navbar-brand" href="{{ url('produtos/galeria') }}"><img src="/img/logo.png" alt=""></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="{{ url('produtos/galeria') }}">HOME</a></li>
					<li><a href="">TESTE</a></li>
					<li><a href="">TESTE</a></li>
					<li>
						<form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Ache seu medicamento...">
							</div>
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
						</form>
					</li>
					<li>
						<a href="">
							<span class="glyphicon glyphicon-shopping-cart"></span> CARRINHO 
							<span class="badge"> 1 </span>
						</a>
					</li>
					@if(Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-user"></span> {{ strtoupper(Auth::user()->name) }} 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('produtos/'.(Auth::user()->id).'/meusdados') }}">Meus dados</a></li>
								<li><a href="{{ url('produtos/'.(Auth::user()->id).'/meuspedidos') }}">Meus pedidos</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="{{ Auth::logout() }}">Sair</a></li>
							</ul>
						</li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-user"></span> ENTRAR 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<div class="col-lg-12">
									<form action="{{ route('login') }}" class="form" method="post" accept-charset="utf-8">
										{{ csrf_field() }}
										<div class="form-group">
											<label>Email:</label>
											<input type="email" name="email" class="form-control" tabindex="1" required>
										</div>
										<div class="form-group">
											<label>Senha:</label>
											<input type="password" class="form-control" tabindex="2" name="password">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-7">
													<input type="checkbox" tabindex="3" name="remember" id="remember">
													<label for="remember"> Lembrar</label>
												</div>
												<div class="col-xs-5 pull-right">
													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary" value="Entrar">
												</div>
											</div>
										</div>
									</form>
								</div>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="active"><a class="disabled" href="#">Tipo <span class="sr-only">(current)</span></a></li>
					<li>
						<ul>
							<li><a href="">Similar</a></li>
							<li><a href="">Generico</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav nav-sidebar">
					<li class="active"><a class="disabled" href="#">Tipo <span class="sr-only">(current)</span></a></li>
					<li>
						<ul>
							<li><a href="">Similar</a></li>
							<li><a href="">Generico</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav nav-sidebar">
					<li class="active"><a class="disabled" href="#">Tipo <span class="sr-only">(current)</span></a></li>
					<li>
						<ul>
							<li><a href="">Similar</a></li>
							<li><a href="">Generico</a></li>
						</ul>
					</li>
				</ul>

			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main corpo">
				@yield('content')
			</div>
		</div>


		<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
		<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js') }}"></script>
	</body>
	</html>