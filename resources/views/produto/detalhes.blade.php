@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do produto: {{$produto->nome}}</h1>

<ul>
	<li><strong>Valor: R$</strong> 	 {{$produto->valor}}
	<li><strong>Descrição:</strong>  {{$produto->descricao or "Nenhuma descrição informada."}}</li>
	<li><strong>Quantidade:</strong> {{$produto->quantidade}}</li>
</ul>
@stop

