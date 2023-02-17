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

Route::view('home', 'jefehome')-> name ('jeho');
Route::view('adusu', 'jefeadusu')-> name('jeadusu');
Route::view('rede', 'jeferede')-> name('jeagde');
Route::view('adtic', 'jefeadtic')-> name('jeadti');


//------------------USUARIOS----------------------------
//Create
Route::get('Usuario/create', [ControladorUsuarios::class, 'create'])->name('Usuario.create');
//store
Route::post('Usuario', [ControladorUsuarios::class, 'store'])->name('Usuario.store');
//index
Route::get('Vistausuario', [ControladorUsuarios::class, 'index'])->name('Usuario.index');
//edit
Route::get('Usuario/{id}/edit', [ControladorUsuarios::class, 'edit'])->name('Usuario.edit');
//update
Route::put('Usuario/{id}', [ControladorUsuarios::class, 'update'])->name('Usuario.update');

//destroy
Route::delete('Usuario/{id}', [ControladorUsuarios::class, 'destroy']) -> name('Usuario.destroy');


