<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidadorLogin;

class LoginCont extends Controller
{
    public function login(){
        return view('login');
    }

    public function log(ValidadorLogin $request){

        //Validacion de Datos
        $credenciales = $request->only('email','password');
        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();

            if((Auth::user()->TipoUsu)==Jefe-Soporte){
              return 'jefe encontrado';

              }if((Auth::user()->TipoUsu)==Auxiliar-Jefe){
                return 'aux encontrado';

                }if((Auth::user()->TipoUsu)==Cliente){
                  return 'Bienvenido';
                }
          
           
        }else{
        return view('login');
        }


    }
    public function logout(Request $request){
    //    Auth::logout();
       
    //    $request-> session()->invalidate();
    //    $request-> session()->regenerateToken();

    //    return redirect(route('/'));
        

    }
}
