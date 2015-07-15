@extends('layout.principal') @section('conteudo')

<h1>Novo produto</h1>
<form action="/produtos/{{$action}}" method="post">
	<input type="hidden" value="{{{csrf_token()}}}" name="_token"/>
	
	<input type="hidden" value="{{$id or ''}}" name="id"/>
	
	<div class="form-group">
		<label for="nome">Nome:</label> 
		<input type="text" class="form-control" name="nome" value="{{$produto->nome or ''}}"/>
	</div>
	<div class="form-group">
		<label>Descrição:</label> 
		<input type="text" class="form-control" name="descricao" value="{{$produto->descricao or ''}}" />
	</div>
	<div class="form-group">
		<label>Valor:</label>  
		<input type="text" class="form-control" name="valor" value="{{$produto->valor or ''}}" />
	</div>
	<div class="form-group">
		<label>Quantidade:</label> 
		<input type="number" class="form-control" name="quantidade" value="{{$produto->quantidade or ''}}" />
	</div>
	
	<button type="submit" class="btn btn-primary btn-block" >Salvar</button>
</form>
@stop

