<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use App\Models\Category;
use App\Models\Subcategoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){
        $product = new Product;
        $data['model']=$product->getRecords(null);
        $data['type']=Type::all();
        $data['category']=Category::where('idcategory','<>',0)->get();
        return view('admin.products.index',compact('data'));
    } 

    public function store(Request $request){
        $product=new Product;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->idcategory = $request->idcategory;
        $product->description = $request->description;
        $product->colores = $request->colores;
        $product->tallas = $request->tallas;
        $product->genero = $request->genero;
        $product->idtype = $request->idtype;
        $product->slug = Str::slug($request->name,'-');
        $product->status = 'active';
        if ($request->hasFile('img_1')){
            $file           = $request->file("img_1");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/products/"),time().$nombrearchivo);
            $product->img_1="products/".time().$nombrearchivo;
        }
        if ($request->hasFile('img_2')){
            $file           = $request->file("img_2");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/products/"),time().$nombrearchivo);
            $product->img_2="products/".time().$nombrearchivo;
        }
        if ($request->hasFile('img_3')){
            $file           = $request->file("img_3");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/products/"),time().$nombrearchivo);
            $product->img_3="products/".time().$nombrearchivo;
        }
        $product->save();
        return redirect()->route('adminProducts.index');
    }

    public function update(Request $request, $product){
        $product=Product::find($product);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->idcategory = $request->idcategory;
        $product->description = $request->description;
        $product->colores = $request->colores;
        $product->genero = $request->genero;
        $product->tallas = $request->tallas;
        $product->idtype = $request->idtype;
        $product->slug = Str::slug($request->name,'-');
        if ($request->hasFile('img_1')){
            $file           = $request->file("img_1");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/products/"),time().$nombrearchivo);
            $product->img_1="products/".time().$nombrearchivo;
        }
        if ($request->hasFile('img_2')){
            $file           = $request->file("img_2");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/products/"),time().$nombrearchivo);
            $product->img_2="products/".time().$nombrearchivo;
        }
        if ($request->hasFile('img_3')){
            $file           = $request->file("img_3");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/products/"),time().$nombrearchivo);
            $product->img_3="products/".time().$nombrearchivo;
        }
        $product->save();
        return redirect()->route('adminProducts.index');
    }

    public function destroy(Request $request,$subcategoria){
        $product=Product::find($subcategoria);
        if($request->has('date')){
            $product->agotado = $request->date;
            if( $product->status=='active'){$product->status = 'agotado';}
            if( $product->status=='inactive'){$product->status = 'agotado';}
        }else{
            if( $product->status=='active'){$product->status = 'inactive';}
            else{$product->status = 'active';}
        }
        $product->save();
        return redirect()->route('adminProducts.index');
    }
}
