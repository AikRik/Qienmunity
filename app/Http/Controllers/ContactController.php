<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class ContactController extends Controller
{
    public function sendContact(Request $request){
        $title = $request->json()->all()['subject'];
        $mail = $request->json()->all()['text'];
         
        mail::send('mailTemplate', ['content' => $mail] ,function($message) use ($title){
            
            $message->subject($title);
            $message->from('sevisser1@gmail.com','mijzlef');
            $message->to('sevisser1@gmail.com');
   
        });
        echo "Email Sent.";
    }
}

 
 