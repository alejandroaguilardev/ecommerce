<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){ 
        $data = new Controller; 
        $data=$data->data();
        $data['sedes']=Contact::get();
        return view('contacts.index',compact('data'))->with('alert','alert');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|min:5|max:60',
            'phone' => 'required|min:5|max:20',
            'messages' => 'required|min:5',
        ]);
        $mail= new ContactMailable($request->all());
        $data = new Controller; 
        $data=$data->data();
        $email = $data['company']['email'];  
        Mail::to($email)->send($mail);
        return back()->with('alert','El Mensaje Fue Enviado');
    }
}
