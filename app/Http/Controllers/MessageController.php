<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function store(Request $request) 
    {
        $message = new Message();
        $data = $request->all();
        $message->author=$data['author'];
        $message->email=$data['email'];
        $message->phone=$data['phone'];
        $message->content=$data['content'];
        $message->save();
        return redirect('/index');

    }
    //
}
