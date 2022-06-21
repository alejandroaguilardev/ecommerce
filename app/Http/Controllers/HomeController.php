<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Product;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = new Controller; 
        $data=$data->data();

        $product = new Product(); 
        $data['reyblue']= DB::table('products as p')->join('categories as c','c.idcategory','=','p.idcategory')->join('type as t','p.idtype','=','t.idtype')
        ->select('p.*','t.name as type','c.name as category','c.slug as cslug')
        ->where('p.idtype','=',2)->orderBy('p.idproducts','desc')->paginate(8);

        $data['altamoda']= DB::table('products as p')->join('categories as c','c.idcategory','=','p.idcategory')->join('type as t','p.idtype','=','t.idtype')
        ->select('p.*','t.name as type','c.name as category','c.slug as cslug')
        ->where('p.idtype','=',1)->orderBy('p.idproducts','desc')->paginate(8);

        $data['home']=Home::first();
        $productOne=explode("_", $data['home']['producto1']);
        $data['product1']=$product->getRecord($productOne[0]);

        $productOne=explode("_", $data['home']['producto2']);
        $data['product2']=$product->getRecord($productOne[0]);

        $productOne=explode("_", $data['home']['producto3']);
        $data['product3']=$product->getRecord($productOne[0]);
        $data['subcategorias']=Subcategoria::where('idsubcategory','<>','0')->orderBy('price')->get();

        return view('home.index',compact('data'));
    }

}