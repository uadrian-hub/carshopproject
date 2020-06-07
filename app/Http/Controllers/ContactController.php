<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use Validator;

class ContactController extends Controller
{
    public function contactIndex()
    {
        return view('theme.faq.contact');
    }


    public function storeContact(Request $request)  // Store tickets made from contact page
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required',
            'subject'   => 'required',
            'question'  => 'required'
        ]);
    if($validator->fails()){
        return redirect()->back()->withErrors($validator);
    }

    $ticket = new Ticket;
    $ticket->name     = $request['name'];
    $ticket->email    = $request['email'];
    $ticket->subject  = $request['subject'];
    $ticket->question = $request['question'];
    $ticket->save();

    return redirect()->back();


    }  // End of store function





} // End of controller
