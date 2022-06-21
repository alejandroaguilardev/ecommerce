<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCart;
use App\Models\Product;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        if(!session()->has('cart')){
          session()->put('cart' , []);
        }
        // session()->flush();
        // return  $value ;

    }
    public function index()
    {
      $data = new Controller;
      $data=$data->data();
      return view('cart.index',compact('data'));
    }

    public function store(StoreCart $request){
      $talla=explode("_", $request->talla);
      $cantidad= intval( $request->cantidad)+1;
      $product=new Product(); $product = $product->getRecord($request->id);
      $tela =Subcategoria::where('idsubcategory','=',$request->tela)->first(); 
      
      //Verificar
      $color_ver=explode(",", $product->colores); $talla_ver=explode(",", $product->tallas);
      if(!in_array($request->color, $color_ver) || !in_array($talla[0], $talla_ver) || $product->agotado > date('Y-m-d') ){
        return json_encode(['success'=>0]);
      }
      
      //Precio por la talla
      $talla_precio=0;
      foreach ($talla_ver as $key){if($key==$talla[0]){break;} $talla_precio+=5;}

      //Preparo el producto para agregar
      $idcart=$product->idproducts.$talla[0].$request->color.$tela->idsubcategory;
      $producto[$idcart]=[
        'idproducto' => $product->idproducts, 
        'nombre' => $product->name, 
        'precio_real'=>$product->price,
        'precio_talla'=>$talla_precio,
        'precio_tela' =>$tela->price,
        'precio' => intval($product->price)+intval($talla_precio) +intval($tela->price),
        'img' => $product->img_1,
        'cantidad' => $cantidad, 
        'talla' => $talla[0],
        'tela_id' => $tela->idsubcategory , 
        'tela' => $tela->name,
        'color' =>  $request->color,
        'discount' =>  $product->discount,
        'slug' =>  $product->slug,
        'cslug' =>  $product->cslug,
      ]; 

      //Evito Duplicado
      $value=array_key_exists($idcart, session()->get('cart'));
      $cart=session()->get('cart');
      if($value){
        $cart[$idcart]['cantidad']=$cantidad;
        session()->put('cart', $cart);
      }else{
        if(!empty($cart)){
          $cart= array_merge(session()->get('cart'),$producto);
          session()->put('cart', $cart);
        }else{
          session()->put('cart', $producto);
        }
      }
      return json_encode(['success'=>1,'param'=> session('cart') ]);
   }


   public function update($idcart, Request $request){
    $cart=session()->get('cart');
    $value=array_key_exists($idcart, session()->get('cart'));
    if($value){
      $cart[$idcart]['cantidad']=$request->cantidad;
       session()->put('cart', $cart);
      }
      return back();
   }

   public function destroy($idcart){
    $cart=session()->get('cart');
    $value=array_key_exists($idcart, session()->get('cart'));
    if($value){
      $cart[$idcart]['cantidad']=0;
       session()->put('cart', $cart);
      }
      return back();
   }
}
