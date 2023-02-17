<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuario;
use DB;
use Carbon\Carbon;

class ControladorUsuarios extends Controller
{

    public function index()
    {
        $ConsultaUsuario= DB::table('tb_usuarios')->get();
        return view ('VistaUsu', compact('ConsultaUsuario'));
    }


    public function create()
    {
        return view('RegistroU');
    }


    public function store(ValidadorUsuario $request)
    {
        DB::table('tb_usuarios')->insert([
            "Nombre"=> $request->input('txtnom'),
            "Usuario"=> $request->input('txtusu'),
            "Contra"=> $request->input('txtcon'),
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
        $consultaId = DB::table('tb_usuarios')->where('idusuario', $id)->first();
        return view('EditarUsu', compact('consultaId'));
    }

    public function update(ValidadorUsuario $request, $id)
    {
        DB::table('tb_usuarios')->where('idusuario', $id)->update([
            "Nombre"=> $request->input('txtnom'),
            "Usuario"=> $request->input('txtusu'),
            "Contra"=> $request->input('txtcon'),
            "TipoUsu"=> $request->input('txttip'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('Vistausuario')->with('Actualizar', 'Usuario Actualizado');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
