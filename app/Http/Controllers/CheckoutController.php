<?php

namespace App\Http\Controllers;

use App\Mail\PedidoMailable;
use App\Models\Department;
use App\Models\District;
use App\Models\Province;
use App\Models\Comprobante;
use App\Models\Comprobante_producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Throwable;

class CheckoutController extends Controller
{
    public function index(){
        $data = new Controller; 
        $data=$data->data();
        $data['departamentos']=Department::select( "name",DB::raw("CONVERT(id, CHAR) as departament"))->get();
        return view('cart.checkout',compact('data'));
    }

    public function store(Request $request){
        $departamento =Department::select( "name",DB::raw("CONVERT(id, CHAR) as departament"))->where('id','=', $request->departamentos)->first();
        $provincia =Province::where('id','=', $request->provincias)->first();
        $distrito =District::where('id','=', $request->distritos)->first();

        $comprobante = new Comprobante;
        $comprobante->idcliente=session()->get('cliente_alta_moda')['id'];
        $comprobante->departamento=$departamento->name;
        $comprobante->provincia=$provincia->name;
        $comprobante->distrito=$distrito->name;
        $comprobante->direccion=$request->direccion;
        $comprobante->referencia= $request->referencia;
        $comprobante->envio= $request->envio;
        $comprobante->metodo= $request->metodo;
        $comprobante->status= 'pendiente';

        if ($request->hasFile('img_1')){
            $file           = $request->file("img_1");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/comprobante/"),time().$nombrearchivo);
            $comprobante->comprobante="comprobante/".time().$nombrearchivo;
        }

        if ($request->hasFile('img_2')){
            $file           = $request->file("img_2");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/comprobante/"),time().$nombrearchivo);
            $comprobante->comprobante="comprobante/".time().$nombrearchivo;
        }
        if($comprobante->metodo=="online"){
            $comprobante->token= $request->token;
        }
        $comprobante->save();


        $comprobante=Comprobante::orderBy('id','desc')->first();
        foreach(session()->get('cart') as $key){
            if($key['cantidad']>0){
            $comprobante_producto = new Comprobante_producto;
            $comprobante_producto->nombre=$key['nombre'];
            $comprobante_producto->cantidad=$key['cantidad'];
            $comprobante_producto->precio=$key['precio'];
            $comprobante_producto->color=$key['color'];
            $comprobante_producto->talla=$key['talla'];
            $comprobante_producto->tela= $key['tela'];
            $comprobante_producto->img= $key['img'];
            $comprobante_producto->discount= $key['discount'];
            $comprobante_producto->idcomprobante= $comprobante->id;
            $comprobante_producto->save();
            }
        }
        
        $data = new Controller; 
        $data=$data->data();

        // $mail= new PedidoMailable($comprobante);
        // $email = $data['company']['email'];  
        // Mail::to($email)->send($mail);
        // Mail::to(session()->get('cliente_alta_moda')['email'])->send($mail);

        session()->forget('cart');
        return view('cart.realizado',compact('data'));
    }


    public function provinces($id){
        return  json_encode(['success'=>1,'param' => Province::select( "name",DB::raw("CONVERT(id, CHAR) as province"))->where('department_id','=',$id)->get()]);
    }

    public function districts($id){
        return json_encode(['success'=>1,'param' => District::select( "name",DB::raw("CONVERT(id, CHAR) as district"))->where('province_id','=',$id)->get()]);

    }

}
