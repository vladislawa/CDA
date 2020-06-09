<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Mail;

require '/Users/vladyslava/cda/vendor/autoload.php';

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
        Mail::to('sdiachenkovladyslava@gmail.com')->send(new \App\Mail\CDAMail($request));
       
        return redirect('/contact')->with('success', 'Message Sent');
        
    } 

}

