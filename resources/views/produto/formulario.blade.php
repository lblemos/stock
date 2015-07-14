@extends('layout.principal') @section('conteudo')

<h1>Novo produto</h1>
<form>
	<div class="form-group">
		<label for="nome">Nome</label> 
		<input class="form-control"/>
	</div>
	<div class="form-group">
		<label>Descricao</label> 
		<input class="form-control"/>
	</div>
	<div class="form-group">
		<label>Valor</label> 
		<input class="form-control" />
	</div>
	<div class="form-group">
		<label>Quantidade</label> 
		<input type="number" class="form-control" />
	</div>

	<button type="submit">Submit</button>
</form>
@stop

