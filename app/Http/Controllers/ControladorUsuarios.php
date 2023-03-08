<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuario;
use App\Http\Requests\validadorperfil;
use Illuminate\Support\Facades\Hash;
use DB;
use Carbon\Carbon;

class ControladorUsuarios extends Controller
{

    public function index()
    {
        $ConsultaUsuario= DB::table('users')->get();
        return view ('VistaUsu', compact('ConsultaUsuario'));
    }


    public function create()
    {
        return view('RegistroU');
    }


    public function store(ValidadorUsuario $request)
    {
        DB::table('users')->insert([
            "name"=> $request->input('txtnom'),
            "email"=> $request->input('txtusu'),
            "password"=> Hash::make($request->input('txtcon')),
            "TipoUsu"=> $request->input('txttip'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('Vistausuario')->with('confirmacion', 'Autor Guardado');
   
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $consultaId = DB::table('users')->where('id', $id)->first();
        return view('EditarUsu', compact('consultaId'));
    }

    public function update(validadorperfil $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            "name"=> $request->input('txtnom'),
            "email"=> $request->input('txtusu'),
            "TipoUsu"=> $request->input('txttip'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('Vistausuario')->with('Actualizar', 'Usuario Actualizado');
   
    }

    public function actualizar(validadorperfil $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            "name"=> $request->input('txtnom'),
            "email"=> $request->input('txtusu'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('JefeSoporte')->with('Actualizarr', 'Usuario Actualizado');
   
    }
    
    public function actualizarC(validadorperfil $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            "name"=> $request->input('txtnom'),
            "email"=> $request->input('txtusu'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('Cliente')->with('Actualizarr', 'Usuario Actualizado');
   
    }
    public function actualizarA(validadorperfil $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            "name"=> $request->input('txtnom'),
            "email"=> $request->input('txtusu'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('Auxiliar')->with('Actualizarr', 'Usuario Actualizado');
   
    }



    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect('Vistausuario')->with('Eliminado', 'Recuerdo Eliminado');

    }
}
