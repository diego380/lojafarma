@extends('master.master')
@section('title','ABRIFIT XPE C/100ML HEDERA+COPO DOSADOR')

@section('content')

<div class="container" id="product-section">
	<div class="row">
		<div class="col-md-6 mycontent-left text-center">
			<img src="{{ url('/img/tarjas.png') }}" alt="">
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<h3>ABRIFIT XPE C/100ML HEDERA+COPO DOSADOR</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<span class="label label-primary">TEUTO</span>
					<span class="monospaced">EAN. 1960140180</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<span class="sr-only">Four out of Five Stars</span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 bottom-rule">
					<h2 class="product-price">R$ 129.00</h2>
				</div>
			</div>
			<div class="row add-to-cart">
				<div class="col-md-5 product-qty">
					<span class="btn btn-default btn-sm btn-qty">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</span>

					<input class="btn btn-default btn-sm btn-qty" value="1" />

					<span class="btn btn-default btn-sm btn-qty">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</span>
				</div>

				<div class="col-md-4">
					<button class="btn btn-sm btn-brand btn-full-width btn-primary">
						Adicionar ao carrinho
					</button>
				</div>
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#description" aria-controls="description" role="tab" data-toggle="tab">Descrição do produto</a>
		</li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="description">
		<p>
			Hedera helix (substância ativa deste medicamento) é indicado para o tratamento de sintomas associados a doenças brônquicas e pulmonares que cursam com aumento de secreções e/ou espasmo (estreitamento) dos brônquios. Por seu efeito expectorante, Hedera helix (substância ativa deste medicamento) melhora a respiração.
		</p>
		</div>
	</div>
</div>

@endsection