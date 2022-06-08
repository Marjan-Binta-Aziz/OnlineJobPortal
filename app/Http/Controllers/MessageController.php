<?php

namespace App\Http\Controllers;

use DB;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function message()
    {

        return view('user.message.sendmessage');
    }
    public function user_message()
    {
        $messages = DB::table('messages')->get();
        return view('admin.message.message', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['subject']=$request->subject;
        $data['body']=$request->body;
        DB::table('messages')->insert($data);

        return redirect()->route('user.send')
                        ->with('success','Messages successfully Sent.');
    }

    public function destroy($id)
    {
        $messages = Message::where('id',$id)->first();
        $messages->delete();
        return redirect()->route('admin.user_message')
                        ->with('success','Message Info Delected Successfully');
    }

    public function view($id)
    {
        $messages = Message::find($id);
        return view('admin.message.view', compact('messages'));
    }
}
