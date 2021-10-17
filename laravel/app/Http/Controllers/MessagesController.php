<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    public function store(){

       request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3'           
       ], [

        'name.required' => 'Necesito Tu Nombre',

       ]); 

       return 'datos validados';

    }
}
