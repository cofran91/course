<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class MessagesController extends Controller
{
    public function contactstore(request $request)
    {
    	request()->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'subject' => 'required',
    		'content' => 'required',
    	]);
   
   	Mail::to('juan@hotmail.com')->send(new MessageReceived);

   	return('mensaje enviado');  	
    }
}
