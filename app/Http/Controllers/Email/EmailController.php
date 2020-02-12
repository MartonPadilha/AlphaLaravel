<?php

namespace App\Http\Controllers\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Help;
use Validator;
use Input;
use Redirect;
use Mail;

class EmailController extends Controller
{

    public function email(Request $request)
	{

		$rules = array(

		// $rules = array(
		// 	'event_type' => '|required',
		// 	'inputName' => 'required',
		// 	'inputEmail' => 'email|required',
		// 	'inputSubject' => 'required',
		// 	'inputMessage' => 'required',


		);

		$validator = Validator::make($request->all(), $rules);

		if ($validator->passes()){

		    if ($validator->passes()){
			$status = true;

			Mail::to('contato@alphaeletrica.ind.br')->send(new \App\Mail\Help( $request->inputName, $request->inputEmail, $request->inputSubject, $request->inputMessage));

			return view('site.contact',compact('status'));
		}

		$status = false;
		return view('contact',compact('status'));

		}
	}

}