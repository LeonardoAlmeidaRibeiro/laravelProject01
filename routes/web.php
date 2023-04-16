<?php

use App\Http\Controllers\DashBordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
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




Route::get('/index', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');
Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth',[LoginController::class,'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');

Route::get('/admin/dashboard',[DashBordController::class,'index'])->name('admin.dashboard')->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });