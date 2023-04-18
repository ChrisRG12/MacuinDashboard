<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb__departamentos;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;
use App\Http\Requests\validadorDepartamento;
use App\Http\Requests\validadorticket;
use App\Http\Controllers\PDFController;
use Barryvdh\DomPDF\Facade\Pdf;



class controladorTickets extends Controller
{

    public function index(Request $request)
    
    {
        $buscarxs=$request->get('buscarxs');
        $buscarxd=$request->get('buscarxd');
        
        $ConsultaTicket=DB::table('tb_tickets')
        ->where('tb_tickets.status', 'LIKE', '%'.$buscarxs.'%')
        ->orwhere('tb_tickets.Depa_id', 'LIKE', '%' . $buscarxs . '%')
        ->get();
        // $ConsultaTicketAsig=DB::table('tb__asig_tic')->get();
        $ConsultaTickets = DB::table('tb_tickets')
        ->join('tb__asig_tic', 'tb_tickets.idtic', '=', 'tb__asig_tic.idasig')
        ->select('tb_tickets.*', 'tb__asig_tic.idasig')
        ->get();
       $TicktesAsig = DB::table('tb__asig_tic')
            ->select('tb__asig_tic.idasig','users.name', 'tb_tickets.idtic', 'tb__asig_tic.observacion')
            ->join('users','tb__asig_tic.autora_id','=','users.id')
            ->join('tb_tickets','tb__asig_tic.tick_id','=','tb_tickets.idtic')
            ->get();
            if(isset($_GET['PDF'])){
                $pdf=PDF::loadView('prueba',compact('ConsultaTicket','ConsultaTickets','TicktesAsig'));
                return $pdf->stream('Reporte.tikets');
            }else{
        return view('vistaTickets', compact('ConsultaTicket','ConsultaTickets','TicktesAsig','buscarxs','buscarxd'));

    }
}

    public function indexA()
    
    {
        $ConsultaTicket=DB::table('tb_tickets')->get();
        // $ConsultaTicketAsig=DB::table('tb__asig_tic')->get();
        $ConsultaTickets = DB::table('tb_tickets')
        ->join('tb__asig_tic', 'tb_tickets.idtic', '=', 'tb__asig_tic.idasig')
        ->select('tb_tickets.*', 'tb__asig_tic.idasig')
        ->get();
       $TicktesAsig = DB::table('tb__asig_tic')
            ->select('tb__asig_tic.idasig','users.name', 'tb_tickets.idtic', 'tb__asig_tic.observacion')
            ->join('users','tb__asig_tic.autora_id','=','users.id')
            ->join('tb_tickets','tb__asig_tic.tick_id','=','tb_tickets.idtic')
            ->get();
        return view('vistaTicketsAsig', compact('ConsultaTicket','ConsultaTickets','TicktesAsig'));

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
        $soloClientes = DB::table('users')
        ->select('*')
        ->where('TipoUsu','=','Auxiliar-Jefe')
        ->get();
        return view('RegistroT', compact('moreinfo','moreinfou', 'soloClientes'));
    }

    public function indexCliente()
    {
        $ConsultaTicket=DB::table('tb_tickets')->get();
        $Misticktes =  DB::table('tb_tickets')
        ->select('*')
        ->where('autorj_id','=',Auth::user()->id)->get();
        
        return view('vistaTicketsC', compact('Misticktes', 'ConsultaTicket'));
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

        return redirect('VistaTicketsC')->with('Confirmacion','abc');
    }

    public function updateTC(Request $request, $id)
{
    DB::table('tb_tickets')->where('idtic',$id)->update([
        "status"=>$request->input('txtstatus'),
    ]);
    return redirect('vistaTicketsC')->with('Actualizar','abc');
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

    public function editA($id)
    {
        $consultaId=DB::table('tb_tickets')->where('idtic',$id)->first();

        $moreinfo = tb__departamentos::all();
        $moreinfou = users::all();
        return view('editarTicketA',compact('consultaId','moreinfou','moreinfo'));
    }

    public function updateA(Request $request, $id)
    {
        DB::table('tb_tickets')->where('idtic',$id)->update([
            "status"=>$request->input('txtstatus'),
            "comentarioC"=>$request->input('txtmensajec'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('vistaTicketsA')->with('Actualizar','abc');
    }

    public function canceltic(validadorticket $request, $id)
    {
        DB::table('tb_tickets')->where('idtic', $id)->update([
            "status"=>$request->input('txtstatus'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('/')->with('Actualizar','abc');

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
