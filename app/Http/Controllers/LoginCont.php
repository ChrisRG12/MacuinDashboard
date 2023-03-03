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

        if(Auth::attempt(['email'=>$request->txtuser, 'password'=>$request->txtcontra])){

                
             if((Auth::user()->TipoUsu)=='Jefe-Soporte'){
               return view('MenuJefe');}

                          if((Auth::user()->TipoUsu)=='Auxiliar-Jefe'){
                             return view('MenuAuxiliar');}
                            
                                    if((Auth::user()->TipoUsu)=='Cliente'){
                                        return view('pueba');}


        }else{
            return redirect('/')->with('Error', 'Error de Usuario');
        }
    }
           

public function logout(){
    Auth::logout();
    return redirect('/');
}


}
