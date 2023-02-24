<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidadorLogin;

use DB;
use Carbon\Carbon;

class LoginCont extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginver(ValidadorLogin $request){

        //Validacion de Datos
        $Credenciales = $request-> only ('name', 'password');
        if(Auth::attempt($Credenciales)){
            $request->session()->regenerate();
            
            if((Auth::user()->TipoUsu)==Jefe-Soporte){
                return view('jefehome');
                }   
                    if((Auth::user()->TipoUsu)==Auxiliar-Jefe){
                    return view('menu');
                     }  
                        if((Auth::user()->TipoUsu)==Cliente){
                        return view('Vistausuario');
                        }
            
        }else{
        return view('login');
        }

    }
    public function logout(Request $request){
       Auth::logout();
       
       $request-> session()->invalidate();
       $request-> session()->regenerateToken();

       return redirect(route('/'));
        

    }
}
