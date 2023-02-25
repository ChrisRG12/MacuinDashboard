<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControladorUsuarios;


class controladorVistas extends Controller
{
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

    
}
