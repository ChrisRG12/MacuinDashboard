<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDepartamento;

use DB;
use Carbon\Carbon;

class controladorDepartamentos extends Controller
{

    public function index()
    {
        $ConsultaDepa=DB::table('tb_departamentos')->get();
        return view('vistaDepas', compact('ConsultaDepa'));
    }


    public function create()
    {
        return view('RegistroD');
    }


    public function store(validadorDepartamento $request)
    {
        DB::table('tb_departamentos')->insert([
            "Nombre"=>$request->input('txtTitulo'),
            "Descripcion"=>$request->input('txtRecuerdo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('vistaDepas')->with('confirmacion','abc');

    }


    public function show($id)
    {
        $consultarId=DB::table('tb_departamentos')->where('idDepa',$id)->first();
        return view('EliminarDepa',compact('consultarId'));
    }


    public function edit($id)
    {
        $consultarId=DB::table('tb_departamentos')->where('idDepa',$id)->first();
        return view('EditarDepa',compact('consultarId'));
    }


    public function update(Request $request, $id)
    {
        DB::table('tb_departamentos')->where('idDepa',$id)->update([
            "Nombre"=> $request->input('txtnombre'),
            "Descripcion"=> $request->input('txtdescripcion'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('vistaDepas')->with('actualizar','abc');
    }


    public function destroy($id)
    {
        $consultarId=DB::table('tb_departamentos')->where('idDepa',$id)->delete();
        return redirect('vistaDepas')->with('Eliminado','abc');
    }
}

