<?php

use Illuminate\Support\Facades\Route;

//impartamos el controlador resource

use App\Http\Controllers\ControladorUsuarios;

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

Route::get('Welcome', function () {
    return view('welcome');
});

Route::view('plan', 'plantilla')-> name('pla');
Route::view('/', 'login')-> name('log');
Route::view('menu', 'menu')-> name('men');


Route::view('Usua', 'usuarios')-> name('usu');



Route::get('/',[controladorVistas::class,'showHome'])->name('ApodoHome');
Route::get('/',[controladorBD::class,'create'])->name('contacto.create');



Route::get('Contacto',[controladorBD::class,'index'])->name('contacto.index');

Route::get('contacto/{id}/edit',[controladorBD::class,'edit'])->name('contacto.edit');

//store
Route::post('contacto', [controladorBD::class,'store'])->name('contacto.store');

Route::put('contacto/{id}',[controladorBD::class,'update'])->name('contacto.update');


Route::get('contacto/{id}/show',[controladorBD::class,'show'])->name('contacto.show');

Route::delete('contacto/{id}',[controladorBD::class,'destroy'])->name('contacto.destroy');