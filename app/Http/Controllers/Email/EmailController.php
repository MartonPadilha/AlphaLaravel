<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Help;
use Validator;
use Input;
use Redirect;
use Mail;

class EmailController extends Controller
{
    public function email(Request $request){

        $rules = array(
        	// 'event_type' => '|required',
			// 'inputName' => 'required',
			// 'inputEmail' => 'email|required',
			// 'inputSubject' => 'required',
			// 'inputMessage' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {
            $status = true;
            Mail::to('contato@alphaeletrica.ind.br')->send(new Help($request->inputName, $request->inputEmail, $request->inputSubject, $request->inputMessage));
            echo('enviou');
            return view('site.contact', compact('status'));
        } else {
            echo('n enviou');
            $status = false;
            return view('site.contact', compact('status'));
        }
    }
}
