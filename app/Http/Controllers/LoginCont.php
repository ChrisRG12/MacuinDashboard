<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidadorLogin;

class LoginCont extends Controller
{
    public function login(ValidadorLogin $request){
        //Validacion de Datos
        $Credenciales =[
            "email" => $request->txtuser,
            "password" => $request->txtcontra,
            
        ];

        if(Auth::attempt($Credenciales)){

            $request->session()->regenerate();

            return redirect()->intended(route('menu'));

        }else{
            return redirect('/');
        }


    }

    public function logout(Request $request){
       Auth::logout();

       $request-> session()->invalidate();
       $request-> session()->regenerateToken();

       return redirect(route('/'));
        

    }
}
