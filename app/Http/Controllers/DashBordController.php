<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;

class DashBordController extends Controller
{
    public function index()
    {
        //gráfico categoria
        $catData = Categoria::all();

        foreach($catData as $cat){
            $catNome[] = "'".$cat->nome."'";
            $catTotal[] = Produto::where('id_categoria',$cat->id)->count();
        }

        $catLabel = implode(',',$catNome);
        $catTotal = implode(',',$catTotal);
        $usuarios = User::all()->count();
        return view('admin.dashboard',compact('usuarios','catLabel','catTotal'));
    }

    public function FunctionName()
    {
        return view('admin/produtos');
    }
}
