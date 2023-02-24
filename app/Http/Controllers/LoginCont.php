<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidadorLogin;

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
            if((Auth::user()->tipoUsu)==Jefe){
                return view('jefehome');
                }   if((Auth::user()->tipoUsu)==Auxiliar){
                    return view('menu');
                 }  if((Auth::user()->tipoUsu)==Cliente){
                    return view('Vistausuario');
                    }
            
        }
        return view('login');
    }
    public function logout(Request $request){
       Auth::logout();
       
       $request-> session()->invalidate();
       $request-> session()->regenerateToken();

       return redirect(route('/'));
        

    }
}
