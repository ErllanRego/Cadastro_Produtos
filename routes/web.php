<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*------------------------VISITANTES-----------------------------*/
/*Route::get('/', function () {
    return view('welcome_shop');
})->name('home');*/
Route::get('/', [ProdutoController::class, 'home'])->name('home');



Route::get('product/detail', [ProdutoController::class, 'detail'])->name('product.detail');
Route::get('product/create', [ProdutoController::class, 'create'])->name('product.create');
Route::post('product/store', [ProdutoController::class, 'store'])->name('product.store');
Route::get('product/edit/{id}', [ProdutoController::class, 'edit'])->name('product.edit');
Route::put('product/update/{id}', [ProdutoController::class, 'update'])->name('product.update');
Route::delete('product/delete/{id}', [ProdutoController::class, 'delete'])->name('product.delete');

/*------------------------ADMNISTRADORES-----------------------------*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
