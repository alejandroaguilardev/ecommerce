<?php

namespace App\Http\Controllers;

use App\Models\Client;
use \App\Models\Comprobante;
use App\Models\Comprobante_producto;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $data;
    public function __construct()
    {
        $this->data = new Controller; 
        $this->data=$this->data->data(); 
    }
    public function index()
    {
        $data=$this->data; 
        $data['pedidos']= Comprobante::where('idcliente','=',session()->get('cliente_alta_moda')['id'])
        ->orderBy('id','desc')->get();
        $data['producto_pedidos']= Comprobante_producto::get();
        return view('profile.index',compact('data'));
    }

    public function edit($perfil)
    {
        $data=$this->data; 
        return view('profile.edit',compact('data'));
    }

    public function update($perfil, Request $request)
    {
        $data=$this->data; 
        $perfil=Client::where('email','=',$request->email)->first();
        if(!empty($perfil)){
            if($perfil->email!=$request->email){
                return back()->with('alert','El email ya existe');
            }
        }

        $client = Client::find(session()->get('cliente_alta_moda')['id']);
        $client->nombre=$request->nombre;
        $client->apellido=$request->apellido;
        $client->celular=$request->celular;
        $client->tipo_documento=$request->tipo_documento;
        $client->documento=$request->documento;
        $client->email=$request->email;
        $client->update();

        $client=[ 'id' =>  session()->get('cliente_alta_moda')['id'], 
        'nombre' => $client['nombre'], 
        'apellido' => $client['apellido'], 
        'celular' => $client['celular'],
        'tipo_documento' => $client['tipo_documento'],
        'documento' => $client['documento'], 
        'email' => $client['email'],
        ];

        session()->put('cliente_alta_moda',$client);
        return view('profile.edit',compact('data'))->with('alert','El perfil ha sido modificado');
    }

    public function show($perfil)
    {
        $data=$this->data; 
        return view('profile.security',compact('data'));

    }
    public function destroy($perfil, Request $request)
    {
        $request->validate([
            'password' => 'required|min:4'
        ]); 
        $perfil=Client::where('id','=',session()->get('cliente_alta_moda')['id'])->first();
        if($perfil->password != $request->password_old){
            return back()->with('alert','El password actual es incorrecto');
        }

        $client = Client::find(session()->get('cliente_alta_moda')['id']);
        $client->password=$request->password;
        $client->save();
        return back()->with('alert','El perfil ha sido modificado');
    }


}
