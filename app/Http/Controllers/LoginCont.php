<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLogin;

class LoginCont extends Controller
{
    public function login(Request $request){
        //Validacion de Datos
        $Credenciales =[
            "Usuario" => $request->txtuser,
            "Contra" => $request->txtcontra,
            
        ];

        if(Auth::attempt($Credenciales)){

            $request->session()->regenerate();

            return redirect()->intended(route('menu'));

        }else{
            return redirect('login');
        }


    }

    public function logout(ValidadorLogin $request){
       Auth::logout();

       $request-> session()->invalidate();
       $request-> session()->regenerateToken();

       return redirect(route('login'));
        

    }
}
