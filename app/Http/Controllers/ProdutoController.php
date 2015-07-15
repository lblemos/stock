<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request as Request;
use App\models\Produto as Produto;

class ProdutoController extends Controller
{
	
	public function __construct(Produto $produto){
		$this->produto = $produto;
	}
	
	public function listar() 
	{		
		$produtos = $this->produto->all();
		
		return view('produto.listagem')->with('produtos' , $produtos);
	}

	public function mostrar($id)
	{		
		$produto = $this->produto->find($id);
		
		return view('produto.detalhes')->with('produto', $produto);
	}
	
	public function novo(){
		return view('produto.formulario')->with('action','adicionar');
	}
	
	public function adicionar(Request $request){
		
		$this->produto->create($request->all());
		
		return redirect()->action('ProdutoController@listar')->withInput($request->only('nome'));
	}
	
	public function listaJson(){
		
		$produtos = $this->produto->all();
		return response()->json($produtos);	
	}
	
	public function remover($id){
		$produto = $this->produto->find($id);
		$produto->delete();
		
		return redirect()->action('ProdutoController@listar');
	}
	
	public function editar($id){
		$produto = $this->produto->find($id);
	
		return view("produto.formulario")->with('produto', $produto)->with('action','atualizar')->with('id',$id);
	}
	
	public function atualizar(Request $request){
		
		$produto = $request->except('_token');
		
		$this->produto->updated($produto,$produto['id']);
	
		return redirect()->action('ProdutoController@listar');
	}
	

}