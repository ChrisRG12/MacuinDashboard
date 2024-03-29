<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_tickets;
use App\Models\users;

use App\Http\Requests\validadorTicketA;


use DB;
use Carbon\Carbon;

class controladorTicketsA extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $buscarxs=$request->get('buscarxs');
        $buscarxd=$request->get('buscarxd');
        $tickets = DB::table('tb__asig_tic')
            ->join('tb_tickets', 'tb_tickets.idtic', '=', 'tb__asig_tic.tick_id')
            ->where('tb_tickets.status', 'LIKE', '%'.$buscarxs.'%')
            ->orwhere('tb_tickets.Depa_id', 'LIKE', '%' . $buscarxs . '%')
            ->select('tb_tickets.*', 'tb__asig_tic.observacion as comentarioA')
            ->get();

        $ConsultaTicketA=DB::table('tb_tickets')->get();
        return view('vistaTicketsA', compact('ConsultaTicketA','tickets','buscarxs'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moreinfot = tb_tickets::all();
       // $moreinfou = users::all();
       $moreinfou = users::where('TipoUsu', '=', 'Auxiliar-Jefe')->get();

        return view('RegistroATA', compact('moreinfot','moreinfou'));
    }

    public function VermisT() //Falta aclara la tabla para ver los tickets del Aux y la vista
    {
        $MisTick =  DB::table('tb_tickets')
        ->select('*')
        ->where('autorj_id','=',Auth::user()->id)->get();

        return view('#', compact('MisTick'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorTicketA $request)
    {
        DB::table('tb__asig_tic')->insert([
            "observacion"=>$request->input('txtobservacion'),
            "autora_id"=>$request->input('txtauxiliar'),
            "tick_id"=>$request->input('txtticket'),
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
