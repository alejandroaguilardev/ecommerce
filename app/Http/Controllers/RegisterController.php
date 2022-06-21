<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClient;
use App\Models\Client;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $data=new Controller;
        $data=$data->data();
        return view('accounts.register',compact('data'));
    }

    public function store(StoreClient $request){
       $client=Client::where('email','=',$request->email)->first();
       if(!empty($client)){
        return back()->with('alert2','El email actual ya esta en uso');
        }
       Client::create($request->all());
       return redirect()->route('login.index')->with('alert','Su cuenta ha sido Creada');
    }

    public function edit($registro){
    
    }

    public function update($registro, Request $request){
    
    }
}
