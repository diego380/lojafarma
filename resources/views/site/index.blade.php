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
</head>
<body>

	<div class="container corpo">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default login2">
					<div class="panel-heading">
						<img src="{{ url('/img/logo.png') }}" class="img-responsive center-block" alt="">
					</div>
					<div class="panel-body">
						<form role="form" action="{{ route('login') }}" method="post">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="email" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Senha" name="password" type="password" value="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me"> Lembre-me
									</label>
								</div>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input class="btn btn-primary pull-right" type="submit" value="Entrar">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
	<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js') }}"></script>
</body>
</html>