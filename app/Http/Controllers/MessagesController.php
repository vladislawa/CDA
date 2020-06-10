<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Contact;
use App\Mail\CDAMail;
use Illuminate\Support\Facades\Mail;


class MessagesController extends Controller
{
    public function submit(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'

    
        ]);



    
        $emailUser = $request->input('email');
        $messageUser = $request->input('message'); 
        $userName = $request->input('name');
        $subject = 'BeMo - new question from '.$userName;

/*
        Mail::raw($messageUser, function($message) use ($emailUser, $subject)
        {
            $message->subject($subject);
            $message->from($emailUser);
            $message->to('d.vladislawa@gmail.com');
        }); 
    */    
        return redirect('/contact')->with('success', 'Email setup in progress:' . ' you have received an email from ' . $userName . ' with email address ' . $emailUser . ' and the message ' . $messageUser);
        
    } 

}

