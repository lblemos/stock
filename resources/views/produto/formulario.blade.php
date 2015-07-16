@extends('layout.principal') @section('conteudo')

@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $erro)
		<li>{{$erro}}</li>
		@endforeach
	</ul>
</div>
@endif

<h1>Novo produto</h1>
<form action="/produtos/{{$action}}" method="post">
	<input type="hidden" value="{{{csrf_token()}}}" name="_token" /> <input
		type="hidden" value="{{$id or ''}}" name="id" />

	<div class="form-group">
		<label for="nome">Nome:</label> <input type="text"
			class="form-control" name="nome" value="{{$produto->nome or old('nome')}}" />
	</div>
	<div class="form-group">
		<label>Descrição:</label> <input type="text" class="form-control"
			name="descricao" value="{{$produto->descricao or old('descricao')}}" />
	</div>
	<div class="form-group">
		<label>Valor:</label> <input type="text" class="form-control"
			name="valor" value="{{$produto->valor or old('valor')}}" />
	</div>
	<div class="form-group">
		<label>Quantidade:</label> <input type="number" class="form-control"
			name="quantidade" value="{{$produto->quantidade or old('quantidade')}}" />
	</div>

	<button type="submit" class="btn btn-primary btn-block">Salvar</button>
</form>
@stop

