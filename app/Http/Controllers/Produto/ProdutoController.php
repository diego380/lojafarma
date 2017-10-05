<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Produto;

class ProdutoController extends Controller
{
    public function galeria()
    {
       	return view('produto.galeriaproduto');
    }

    public function descricao()
    {
    	return view('produto.descricaoproduto');
    }
}
