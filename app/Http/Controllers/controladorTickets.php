<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb__departamentos;
use App\Models\users;

use App\Http\Requests\validadorDepartamento;
use App\Http\Requests\validadorticket;

use DB;
use Carbon\Carbon;


class controladorTickets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaTicket=DB::table('tb_tickets')->get();
        return view('vistaTickets', compact('ConsultaTicket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moreinfo = tb__departamentos::all();
        $moreinfou = users::all();
        return view('RegistroT', compact('moreinfo','moreinfou'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorticket $request)
    {
        DB::table('tb_tickets')->insert([
            "autorj_id"=>$request->input('txtcliente'),
            "Depa_id"=>$request->input('txtdepa'),
            "fecha"=>$request->input('txtfecha'),
            "clasificacion"=>$request->input('txtclasificacion'),
            "detalles"=>$request->input('txtdetalles'),
            "status"=>$request->input('txtstatus'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()


        ]);

        return redirect('vistaTickets')->with('Confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId=DB::table('tb_tickets')->where('idtic',$id)->first();
        return view('EliminarTicket',compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId=DB::table('tb_tickets')->where('idtic',$id)->first();

        $moreinfo = tb__departamentos::all();
        $moreinfou = users::all();
        return view('editarTicket',compact('consultaId','moreinfou','moreinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorticket $request, $id)
    {
        DB::table('tb_tickets')->where('idtic',$id)->update([
            "autorj_id"=>$request->input('txtcliente'),
            "Depa_id"=>$request->input('txtdepa'),
            "fecha"=>$request->input('txtfecha'),
            "clasificacion"=>$request->input('txtclasificacion'),
            "detalles"=>$request->input('txtdetalles'),
            "status"=>$request->input('txtstatus'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('vistaTickets')->with('Actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultarId=DB::table('tb_tickets')->where('idtic',$id)->delete();
        return redirect('vistaTickets')->with('Eliminado','abc');
    }
}
