<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function saveMessage(Request $request){
        $message = Message::create([
            "name" => $request->name,
            "msg" => $request->msg,
            "email" => $request->email
        ]);
        $message->save();
        return "success";

    }
}
