<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importamos el request
use App\Http\Requests\ValidadorUsuario;
//Hacemos las siguiente importaciones
use DB;
use Carbon\Carbon;

class ControladorUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaUsuario= DB::table('tb_usuarios')->get();
        return view ('VistaUsu', compact('ConsultaUsuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RegistroU');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
