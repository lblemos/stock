@extends('layout.principal') @section('conteudo')
<h1>Listagem de produtos</h1>

@if(empty($produtos))

<div class="alert alert-danger">
	<p>Você não tem nenhum produto cadastrado.</p>
</div>

@else @if(old('nome'))
<div class="alert alert-success">
	<p>
		<strong>Sucesso:</strong> produto {{old('nome')}} adicionado!
	</p>
</div>
<hr />
@endif
<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>Nome</th>
		<th>Valor</th>
		<th>Descrição</th>
		<th>Quantidade</th>
		<th>Vizualizar</th>
		<th>Deletar</th>
		<th>Editar</th>
	</tr>
	@foreach($produtos as $produto)
	<tr class="{{$produto->quantidade <= 1 ? 'danger' : ''}}">
		<td>{{$produto->nome}}</td>
		<td>{{$produto->valor}}</td>
		<td>{{$produto->descricao}}</td>
		<td>{{$produto->quantidade}}</td>
		<td><a href="{{action('ProdutoController@mostrar', $produto->id)}}"><span
				class="glyphicon glyphicon-search"></span></a></td>
		<td><a href="{{action('ProdutoController@remover', $produto->id)}}"><span
				class="glyphicon glyphicon-trash"></span></a></td>
		<td><a href="{{action('ProdutoController@editar', $produto->id)}}"><span
				class="glyphicon glyphicon-edit"></span></a></td>
	</tr>
	@endforeach
</table>

@endif

<div>
	<h4>
		<span class="label label-danger pull-right">Um ou menos itens no
			estoque</span>
	</h4>
</div>
@stop

