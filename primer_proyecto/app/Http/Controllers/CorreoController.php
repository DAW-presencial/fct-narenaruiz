<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CorreoController extends Controller
{
    function enviar() {//No se que falla
        $to_name = 'nicolas';
        $to_email = 'salvaje1234567890@gmail.com';//donde recibes el correo
        $data = array('name'=>"Nicolas", "body" => "Hola, que tal?");
        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from('narena@cifpfbmoll.eu','Test Mail');//desde donde lo mandas
        });
    }
}
