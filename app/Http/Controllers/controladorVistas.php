<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;
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

    // public function showMistickets()
    // {
    //     $ConsultaTicket=DB::table('tb_tickets')->get();
    //     $Misticktes =  DB::table('tb_tickets')
    //     ->select('*')
    //     ->where('autorj_id','=',Auth::user()->id)->get();
        

    //     return view('Mistickets', compact('Misticktes', 'ConsultaTicket'));
    //     return view('Mistickets');
    // }

    
}
