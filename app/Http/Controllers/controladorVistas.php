<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControladorUsuarios;


class controladorVistas extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showJefe()
    {
        return view('MenuJefe');
    }

    public function showAuxiliar()
    {
        return view('MenuAuxiliar');
    }

    public function showCliente()
    {
        return view('MenuCliente');
    }

    public function login(controladorUsuarios $request)
    {
        $credentials = $request->validate([
            'Usuario' => 'required|email',
            'contra' => 'required',
            'type' => 'required',
        ]);

        $type = $request->type;
        
    }
    protected function redirectTo()
{
    if (Auth::user()->type == 'Jefe Soporte') {
        return route('jefe_soporte.menu');
    } elseif (Auth::user()->type == 'Auxiliar') {
        return route('auxiliar.menu');
    } else {
        return route('cliente.menu');
    }
}
    
}
