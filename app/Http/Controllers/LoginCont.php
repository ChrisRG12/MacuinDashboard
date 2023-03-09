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
               return redirect('JefeSoporte')->with('Entrar', 'Bienvenido');}

                          if((Auth::user()->TipoUsu)=='Auxiliar-Jefe'){
                            return redirect('Auxiliar')->with('Entrar', 'Bienvenido');}
                            
                                    if((Auth::user()->TipoUsu)=='Cliente'){
                                        return redirect('Cliente')->with('Entrar', 'Bienvenido');}
                                        

        }else{
            return redirect('/')->with('Error', 'Error de Usuario');
        }
    }
           

public function logout(){
    Auth::logout();
    return redirect('/');
}


}
