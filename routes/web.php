<?php

use Illuminate\Support\Facades\Route;

//impartamos los controladores

use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorDepartamentos;
use App\Http\Controllers\controladorTickets;
use App\Http\Controllers\LoginCont;


//      Route::view('plan', 'plantilla')-> name('pla');
//Route::view('/', 'login')-> name('log');
//Route::view('menu', 'menu')-> name('men');
//------------------Menus----------------------------


Route::view('plan', 'plantilla')-> name('pla');
Route::view('welcome', 'welcome')-> name('we');
Route::view('menu', 'menu')-> name('men')->middleware('auth');


Route::view('adusu', 'vistaUsuu')-> name('jeadusu');
//Route::view('adtic', 'jefeadtic')-> name('jeadti');


Route::get('JefeSoporte', [controladorVistas::class, 'showJefe'])->name('homejefe')->middleware('auth');
Route::get('Auxiliar', [controladorVistas::class, 'showAuxiliar'])->name('homeaux')->middleware('auth');
Route::get('Cliente', [controladorVistas::class, 'showCliente'])->name('homecliente')->middleware('auth');

//------------------LOGIN----------------------------
Route::get('/', [LoginCont::class, 'login'])->name('login');
Route::post('Incia/Sesion', [LoginCont::class, 'log'])->name('Iniciar.Sesion');
Route::get('Cierra/Sesion', [LoginCont::class, 'logout'])->name('Cierra.Sesion');


//------------------USUARIOS----------------------------
//Create
Route::get('Usuario/create', [ControladorUsuarios::class, 'create'])->name('Usuario.create')->middleware('auth');
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


Route::view('Usua', 'usuarios')-> name('usu')->middleware('auth');

//------------------Departamentos----------------------------
//Create
Route::get('Departamento/create', [controladorDepartamentos::class, 'create'])->name('depa.create')->middleware('auth');
//store
Route::post('Departamento', [controladorDepartamentos::class, 'store'])->name('depa.store');
//index
Route::get('vistaDepas', [controladorDepartamentos::class, 'index'])->name('depa.index')->middleware('auth');
//edit
Route::get('Departamento/{id}/edit', [controladorDepartamentos::class, 'edit'])->name('depa.edit')->middleware('auth');
//update
Route::put('Departamento/{id}', [controladorDepartamentos::class, 'update'])->name('depa.update');
//show
Route::get('Departamento/{id}/show', [controladorDepartamentos::class, 'show']) -> name('depa.show')->middleware('auth');
//destroy
Route::delete('Departamento/{id}', [controladorDepartamentos::class, 'destroy']) -> name('depa.destroy');

//------------------Ticket----------------------------
//Create
Route::get('Ticket/create', [controladorTickets::class, 'create'])->name('ticket.create')->middleware('auth');
//store
Route::post('Ticket', [controladorTickets::class, 'store'])->name('ticket.store');




//index
Route::get('vistaTickets', [controladorTickets::class, 'index'])->name('ticket.index')->middleware('auth');
//edit
Route::get('Ticket/{id}/edit', [controladorTickets::class, 'edit'])->name('ticket.edit')->middleware('auth');
//update
Route::put('Ticket/{id}', [controladorTickets::class, 'update'])->name('ticket.update');
//show
Route::get('Ticket/{id}/show', [controladorTickets::class, 'show']) -> name('ticket.show')->middleware('auth');
//destroy
Route::delete('Ticket/{id}', [controladorTickets::class, 'destroy']) -> name('ticket.destroy');

