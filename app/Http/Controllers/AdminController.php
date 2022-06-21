<?php

namespace App\Http\Controllers;

use App\Mail\PedidoStatusMailable;
use App\Models\Client;
use App\Models\Home;
use App\Models\Product;
use App\Models\User;
use App\Models\Company;
use App\Models\Comprobante_producto;
use App\Models\Comprobante;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function adminLogin(){
        return view('admin.sesion.login');
    }


    public function adminLoguiarse(Request $request){
        $request->validate(['email'=>'required|email','password'=>'min:4']);
        
        $user=User::where('email','=',$request->email)->first();
        if(empty($user['email'])){
            return back()->with('alert2','El correo electrónico es incorrecto');
        }
        if($user['password']!=$request->password){
            return back()->with('alert2','Tus datos son incorrectos');
        }
        $user=[ 'id' => $user['id'], 
            'nombre' => $user['name'], 
            'idrol' => $user['idrol'], 
            'email' => $user['email'],
        ];
        session()->put('admin_alta_moda',$user);
        return redirect()->route('adminHome');
    }

    public function adminHome(){
            return view('admin.home.index');
    }
    public function destroy(){
        session()->forget('admin_alta_moda');
        return redirect()->route('adminLogin');
    }

    public function adminBanner(){
        $product = new Product(); 
        $data=[];
        $data['home']=Home::first();
        $productOne=explode("_", $data['home']['producto1']);
        $data['product1']=$product->getRecord($productOne[0]);

        $productOne=explode("_", $data['home']['producto2']);
        $data['product2']=$product->getRecord($productOne[0]);

        $productOne=explode("_", $data['home']['producto3']);
        $data['product3']=$product->getRecord($productOne[0]);
        $data['products']=Product::get();
        return view('admin.paginas.banner', compact('data'));

    }
    public function adminBannerPost(Request $request){
        $home = Home::first();
        if ($request->hasFile('banner1')){
            $file           = $request->file("banner1");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/inicio/"),$nombrearchivo);
            $home->banner1="inicio/".$nombrearchivo;
        }
        if ($request->hasFile('banner2')){
            $file           = $request->file("banner2");
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("img/inicio/"),time()."_".$nombrearchivo);
            $home->banner2="inicio/".$request->banner2;
        }
        if ($request->hasFile('banner3')){
            $file           = $request->file("banner3");
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("img/inicio/"),time()."_".$nombrearchivo);
            $home->banner3="inicio/".$request->banner3;
        }
        $home->producto1=$request->producto1;
        $home->producto2=$request->producto2;
        $home->producto3=$request->producto3;
        $home->save();
        
        return redirect()->route('adminBanner');
    }
    public function adminAbout(){
        $data = Company::first();
        return view('admin.paginas.about', compact('data'));
    }

    public function adminAboutPost(Request $request){
        $company = Company::first();
        $company->terminos=$request->terminos;
        $company->politicas=$request->politicas;
        $company->forma_envio=$request->forma_envio;
        $company->devoluciones=$request->devoluciones;
        $company->preguntas=$request->preguntas;
        $company->nosotros=$request->nosotros;
        $company->mision=$request->mision;
        $company->save();

        $data = Company::first();
        return view('admin.paginas.about', compact('data'));
    }


    public function adminRed(){
        $data['model'] = Company::first();
        return view('admin.paginas.redes', compact('data'));
    }

    public function adminRedPost(Request $request){
        $company = Company::first();
        $company->facebook=$request->facebook;
        $company->instagram=$request->instagram;
        $company->youtube=$request->facebook_2;
        $company->email=$request->email;
        $company->whatsapp=$request->whatsapp;
        $company->save();
        $data['model'] = Company::first();
        return view('admin.paginas.redes', compact('data'));
    }

    public function adminPedidos(){
        $data['pedidos']= Comprobante::orderBy('id','desc')->get();
        $data['producto_pedidos']= Comprobante_producto::orderBy('id','desc')->get();
        $data['clientes']= Client::orderBy('id','desc')->get();
        return view('admin.paginas.pedidos', compact('data'));
    }

    public function adminPedidosPost(Request $request,$id){
        $comprobante=Comprobante::find($id);
        $cliente=Client::find($comprobante->idcliente);

        $comprobante->status = $request->status;
        $comprobante->description = $request->description;
        $comprobante->save();
        $comprobante_productos = Comprobante_producto::where('id','=',$comprobante->id)->get();
        
        $mail= new PedidoStatusMailable($comprobante,$comprobante_productos);
        $email = $cliente['email'];  
        Mail::to($email)->send($mail);


        return redirect()->route('adminPedidos');
    }

}
