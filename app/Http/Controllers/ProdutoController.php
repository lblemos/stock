<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request as Request;

class ProdutoController extends Controller
{
	/**
	 * Lista os produtos cadastrados
	 */
	public function listar() 
	{		
		$produtos = DB::select('select * from produtos');
		
		return view('produto.listagem')->with('produtos' , $produtos);
	}

	public function mostrar($id)
	{		
		$produto = DB::select('select * from produtos where id = ?', [$id]);
		
		return view('produto.detalhes')->with('produto', $produto[0]);
	}

}