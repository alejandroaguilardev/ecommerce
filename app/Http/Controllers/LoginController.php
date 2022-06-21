<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLogin;
use App\Mail\RecuperarMailable;
use App\Models\Client;
use App\Models\RecuperarCuentaCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index(){
        $data=new Controller;
        $data=$data->data();
        return view('accounts.login',compact('data'));
    }

    public function store(StoreLogin $request){
        $client=Client::where('email','=',$request->email)->first();
        if(empty($client['email'])){
            return back()->with('alert2','El correo electrónico es incorrecto');
        }
        if($client['password']!=$request->password){
            return back()->with('alert2','Tus datos son incorrectos');
        }

        $client=[ 'id' => $client['id'], 
            'nombre' => $client['nombre'], 
            'apellido' => $client['apellido'], 
            'celular' => $client['celular'],
            'tipo_documento' => $client['tipo_documento'],
            'documento' => $client['documento'], 
            'email' => $client['email'],
        ];
        session()->put('cliente_alta_moda',$client);
        return redirect()->route('checkout.index');
    }

    public function show($login){
        session()->forget('cliente_alta_moda');
        return redirect()->route('product.index');
    }

    public function edit($id){
        $data=new Controller;
        $data=$data->data();
        $data['token'] = $id;
        $ldate = date('Y-m-d H:i:s',time()-86400);
        $recuperar= RecuperarCuentaCliente::where('token','=',$id)
        ->where('status','=','active')
        ->where('created_at','>',$ldate)->orderBy('id','desc')->first();

        if(!empty($recuperar)){
            return view('accounts.recuperar',compact('data'));
        }else{
            return redirect()->route('login.index');
        }
    }

    public function update(Request $request,$id)
    {
        function generetePassword($longitud) {
            $password=null;
              $param = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
              for($i=0;$i<$longitud;$i++) {
                 $password .= substr($param,rand(0,62),1);
              }
              return $password;
        }	
        $ldate = date('Y-m-d H:i:s',time()-86400);
        $recuperar= RecuperarCuentaCliente::where('token','=',$id)
        ->where('status','=','active')
        ->where('created_at','>',$ldate)->orderBy('id','desc')->first();

        if(!empty($recuperar)){
            $recuperar->status = 'inactive';
            $recuperar->save();
            
            $client = Client::where('email','=',$recuperar->email)->first();
            $client->password = $request->password;
            $client->save();
            return redirect()->route('login.index');

        }
        if($id='recuperar'){
            $client = Client::where('email','=',$request->email)->first();
            if(empty($client)){
                return back()->with('alert2','Datos Incorrectos');
            }
            $recuperar= new RecuperarCuentaCliente;
            $recuperar->email = $request->email;
            $recuperar->token = base64_encode(generetePassword(64));
            $recuperar->status = 'active';
            $recuperar->save();

            $mail = new RecuperarMailable($recuperar);
            Mail::to($request->email)->send($mail);
            return back()->with('alert','Se ha enviado el correo');
        }
        return back()->with('alert2','Datos Incorrectos');

    }


    public function destroy($login){
        session()->forget('cliente_alta_moda');
        return redirect()->route('product.index');
    }

}
