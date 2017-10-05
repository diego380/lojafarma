@extends('master.master')
@section('title','Carrinho de compras')


@section('content')

<div class="conteiner">
	<div class="row">
		<div class="col-md-6">
			<h2>
				<span class="glyphicon glyphicon-shopping-cart"></span> Carrinho de compras 
			</h2>
		</div>
	</div>
	<div>
		<div class="col-md-12">
			<table class="table table-striped">
				<th>
					<td>Produto</td>
					<td>Quantidade</td>
					<td>Preço</td>
					<td>Total</td>
					<td>Ação</td>
				</th>
				<tr>
					<td>data</td>
					<td>data</td>
					<td class="col-sm-1 col-md-1">
						<input class="form-control" type="text" name="" value="" placeholder="">
					</td>
					<td>data</td>
					<td>data</td>
					<td>
						<button class="btn btn-danger">
							<span class="glyphicon glyphicon-remove"></span>
						</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
</div>


@endsection