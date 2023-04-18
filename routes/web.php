<?php

use Illuminate\Support\Facades\Route;

//impartamos los controladores

use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorDepartamentos;
use App\Http\Controllers\controladorTickets;
use App\Http\Controllers\controladorTicketsA;
use App\Http\Controllers\LoginCont;
use App\Http\Controllers\PDFController;





Route::get('JefeSoporte', [controladorVistas::class, 'showJefe'])->name('homejefe')->middleware('auth');
Route::get('Auxiliar', [controladorVistas::class, 'showAuxiliar'])->name('homeaux')->middleware('auth');
Route::get('Cliente', [controladorVistas::class, 'showCliente'])->name('homecliente')->middleware('auth');
// Route::get('Mios', [controladorVistas::class, 'showMistickets'])->name('ticketsss')->middleware('auth');

//------------------LOGIN----------------------------
Route::get('/', [LoginCont::class, 'login'])->name('login');
Route::post('Incia/Sesion', [LoginCont::class, 'log'])->name('Iniciar.Sesion');
Route::get('Cierra/Sesion', [LoginCont::class, 'logout'])->name('Cierra.Sesion');




//------------------------Cancelar Ticket
Route::get('VistaTicketsC', [controladorTickets::class, 'indexCliente'])->name('ticketC.index')->middleware('auth');

Route::put('cancelarT/{id}', [controladorTickets::class, 'updateTC'])->name('cancel.update');

//Mensajes-------------------------
//vista del auxiliar con mensajes

//edit
Route::get('TicketAA/{id}/edit', [controladorTickets::class, 'editA'])->name('ticketAA.edit')->middleware('auth');
//update
Route::put('TicketAA/{id}', [controladorTickets::class, 'updateA'])->name('ticketAA.update');


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

//update de modal del perfil del Jefe
Route::put('Jefff', [ControladorUsuarios::class, 'actualizar'])->name('Perfil.actualizar');
//update de modal del perfil del cliente
Route::put('Clien', [ControladorUsuarios::class, 'C'])->name('Perfil.C');
//update de modal del perfil del auxiliar
Route::put('Auxi', [ControladorUsuarios::class, 'A'])->name('Perfil.A');

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
Route::post('Ticket', [controladorTickets::class, 'store'])->name('ticket.store')->middleware('auth');
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

Route::get('search',[controladorticket::class, 'search'])->name('search');

//------------------Asignar Ticket----------------------------
Route::get('vistaTicketsAsig', [controladorTickets::class, 'indexA'])->name('ticketAA.index')->middleware('auth');

//Create
Route::get('TicketA/create', [controladorTicketsA::class, 'create'])->name('ticketA.create')->middleware('auth');
//Create

//store
Route::post('TicketA', [controladorTicketsA::class, 'store'])->name('ticketA.store');
//index
Route::get('vistaTicketsA', [controladorTicketsA::class, 'index'])->name('ticketA.index')->middleware('auth');
//edit
Route::get('TicketA/{id}/edit', [controladorTicketsA::class, 'edit'])->name('ticketA.edit')->middleware('auth');
//update
Route::put('TicketA/{id}', [controladorTicketsA::class, 'update'])->name('ticketA.update');

//------------------PDF----------------------------
Route::get('/pdf','PDFController@PDF')->name('descargarPDF');
