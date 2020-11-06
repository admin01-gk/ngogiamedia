<?php

namespace App\Http\Controllers;

use App\Events\redisEvent;
use App\Message;
use Illuminate\Http\Request;

class redisController extends Controller
{
    public function index(){
        $Message = Message::all();
        return view ("index",compact('Message'));
    }
    //
    public function postIndex(Request $request){
        $Message = Message::create($request->all());
        event(
$e = new redisEvent($Message)
        );
        return redirect()->back();
    }
    
}
