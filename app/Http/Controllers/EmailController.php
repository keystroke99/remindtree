<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    //
    public function sendemail(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('keystroke99@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);
    }
}
