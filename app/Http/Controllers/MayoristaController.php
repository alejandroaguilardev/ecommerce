<?php

namespace App\Http\Controllers;


use App\Mail\MayoristaMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MayoristaController extends Controller
{
    private $data;
    public function __construct()
    {
        $this->data=new Controller;
        $this->data=$this->data->data();
    }
    public function index()
    {
        $data=$this->data;
        return view('mayorista.index',compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|min:5|max:60',
            'phone' => 'required|min:5|max:20',
            'messages' => 'required|min:5',
        ]);
        $mail= new MayoristaMailable($request->all());
        $data = new Controller; 
        $data=$data->data();
        $email = $data['company']['email'];  
        Mail::to($email)->send($mail);
        return back()->with('alert','El Mensaje Fue Enviado');
    }

}
