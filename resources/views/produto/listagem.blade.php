@extends('layout.principal') 

@section('conteudo')
<h1>Listagem de produtos</h1>

@if(empty($produtos))

	<div class="alert alert-danger">
		<p>Você não tem nenhum produto cadastrado.</p>
	</div>

@else

	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>Nome</th>
			<th>Valor</th>
			<th>Descrição</th>
			<th>Quantidade</th>
			<th>Vizualizar</th>
		</tr>
		@foreach($produtos as $produto)
		<tr class="{{$produto->quantidade <= 1 ? 'danger' : ''}}" >
			<td>{{$produto->nome}}</td>
			<td>{{$produto->valor}}</td>
			<td>{{$produto->descricao}}</td>
			<td>{{$produto->quantidade}}</td>
			<td><a href="/produtos/mostrar/{{$produto->id}}"><span
					class="glyphicon glyphicon-search"></span></a></td>
		</tr>
		@endforeach
	</table>

	@endif
	
	<h4>
		<span class="label label-danger pull-right">Um ou menos itens no estoque</span>
	</h4>
	

@stop
