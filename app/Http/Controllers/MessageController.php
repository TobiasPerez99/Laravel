<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){

       $msg = request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3'           
       ], [

        'name.required' => 'Necesito Tu Nombre',

       ]); 

//       Enviar Email

        Mail::to('tobiasleonel77@gmail.com' )->queue(new MessageReceived($msg));

        return 'Mensaje Enviado';

    }
}
