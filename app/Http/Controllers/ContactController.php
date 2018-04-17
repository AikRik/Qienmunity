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
        $sendFrom = auth()->user()->name;
        $replyTo = auth()->user()->email;
         
        mail::send('mailTemplate', ['content' => $mail,'sendFrom' => $sendFrom, 'replyTo' => $replyTo] ,function($message) use ($title){
            
            $message->subject($title);
            $message->from('sevisser1@gmail.com','Qienmunity');
            $message->to('sevisser1@gmail.com');
   
        });
        echo "Email Sent.";
    }
}

 
 