<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate \ Support \ Facades \ Auth;

class AuthController extends Controller
{
    public function dashboard(){
        if (Auth::check() === true) {
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');

    }

    public function showLoginForm(){
        return view('admin.formLogin');
    }

    public function login(Request $request){

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            // return redirect()->back()->withInput()->withErrors(['E-mail incorreto!']);
            $login['success'] = false;
            $login['message'] = 'Isso é um email?';
            echo json_encode($login);
            return;
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials) ) {
            // return redirect()->route('work.index');
            $login['success'] = true;
            echo json_encode($login);
            return;
        }

        //leva uma mensagem de erro à tela de login
        // return redirect()->back()->withInput()->withErrors(['E-mail ou senha incorretos!']);
        $login['success'] = false;
        $login['message'] = 'E-mail ou senha incorretos!';
        echo json_encode($login);
        return;
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin');
    }
}
