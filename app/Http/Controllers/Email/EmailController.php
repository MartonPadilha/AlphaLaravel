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

			$email['success'] = true;
			$email['message'] = 'Obrigado pelo contato. Seu email foi enviado com sucesso!';
			echo json_encode($email);
			return;
			// return view('site.contact',compact('status'));
		}
		$email['success'] = false;
		$email['message'] = 'Falha ao enviar email. Tente Novamente';
		echo json_encode($email);
		return;
		// $status = false;
		// return view('contact',compact('status'));

		}
	 }

}