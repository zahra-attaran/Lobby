<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    function index()
    {
        $massages = Message::all();
        //message ha ro khondim hamon select...
        //[ on chizi k mikhaym ersal beshe az controller be view ]
        return view("welcome", [
            "massages" => $massages
        ]);
    }

    function add(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:256',
            'text'=>'required|max:256'
        ]);

        $message = new Message();
        $message->name = $request["name"];
        $message->text = $request["text"];
        $message->save();



        return redirect()->to('/');
    }
}
