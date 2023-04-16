<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Gate;



class SiteController extends Controller
{

    public function index()
    {
        $produtos = Produto::paginate(3);

        return view('site.home', compact('produtos'));
    }

    public function details($slug)
    {
        $produto = Produto::where('slug',$slug)->first();
        Gate::authorize('ver-produto',$produto);
        return view('site.details', compact('produto'));
    }

    public function categoria($id)
    {
        $produtos = Produto::where('id_categoria',$id)->paginate(3);
        $categoria = Categoria::where('id',$id)->first();
        return view('site.categoria', compact('produtos','categoria'));
    }
}
