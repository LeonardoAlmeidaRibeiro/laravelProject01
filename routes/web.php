<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('admin.clientes');
});

Route::group([
    'prefix' => 'admin',
    'as'     => 'admin.'
], function () {
    Route::get('dashboard', function () {
        return 'dashboard';
    })->name('dashboard');
    Route::get('usuarios', function () {
        return 'usuarios';
    })->name('usuarios');
    Route::get('clientes', function () {
        return 'clientes';
    })->name('clientes');
});


Route::get('/index', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.index');
