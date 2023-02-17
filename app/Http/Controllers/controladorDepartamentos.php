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
        $ConsultaDepa=DB::table('tb__departamentos')->get();
        return view('vistaDepas', compact('ConsultaDepa'));
    }


    public function create()
    {
        return view('RegistroD');
    }


    public function store(validadorDepartamento $request)
    {
        DB::table('tb__departamentos')->insert([
            "Nombre"=>$request->input('txtnombre'),
            "Descripcion"=>$request->input('txtdescripcion'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()


        ]);

        return redirect('vistaDepas')->with('Confirmacion','abc');

    }


    public function show($id)
    {
        $consultaId=DB::table('tb__departamentos')->where('idDepa',$id)->first();
        return view('EliminarDepa',compact('consultaId'));
    }


    public function edit($id)
    {
        $consultaId=DB::table('tb__departamentos')->where('idDepa',$id)->first();
        return view('EditarDepa',compact('consultaId'));
    }


    public function update(Request $request, $id)
    {
        DB::table('tb__departamentos')->where('idDepa',$id)->update([
            "Nombre"=> $request->input('txtnombre'),
            "Descripcion"=> $request->input('txtdescripcion'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('vistaDepas')->with('Actualizar','abc');
    }


    public function destroy($id)
    {
        $consultarId=DB::table('tb__departamentos')->where('idDepa',$id)->delete();
        return redirect('vistaDepas')->with('Eliminado','abc');
    }
}

