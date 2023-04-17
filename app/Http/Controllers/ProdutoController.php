<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::paginate(5);
        
        return view('admin\produtos', compact('produtos'));
    }

    public function destroy ($id)
    {
        $produtos = Produto::find($id);
        $produtos->delete();
        return redirect()->route('admin.produtos')->with('sucesso', 'Produto removido com sucesso.');
    }
}
