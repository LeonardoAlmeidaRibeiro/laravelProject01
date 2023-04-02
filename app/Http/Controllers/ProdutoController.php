<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
      
        return view('site.home');
    }

    public function show($id=0)
    {
        return 'Show:' . $id;
    }
}
