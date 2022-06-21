<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSubcategoriasController extends Controller
{
    public function index(){
        $data['model']=DB::table('subcategorias as s')->join('categories as c','s.idcategory','=','c.idcategory')
        ->select('s.*','c.name as category')
        ->get();
        $data['category']=Category::where('idcategory','<>',0)->get();
        return view('admin.products.subcategorias.index',compact('data'));
    }

    public function store(Request $request){
        $subcategory=new Subcategoria;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->price = $request->price;
        $subcategory->idcategory = $request->idcategory;

        $subcategory->status = 'active';
        if ($request->hasFile('img')){
            $file           = $request->file("img");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/subcategory/"),time().$nombrearchivo);
            $subcategory->img="subcategory/".time().$nombrearchivo;
        }
        $subcategory->save();
        return redirect()->route('adminSubCategorias.index');
    }

    public function update(Request $request, $subcategoria){
        $subcategory=Subcategoria::find($subcategoria);
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->price = $request->price;
        $subcategory->idcategory = $request->idcategory;

        $subcategory->status = 'active';
        if ($request->hasFile('img')){
            $file           = $request->file("img");
            $nombrearchivo  = time()."_".$file->getClientOriginalName();
            $file->move(public_path("img/subcategory/"),time().$nombrearchivo);
            $subcategory->img="subcategory/".time().$nombrearchivo;
        }
        $subcategory->save();
        return redirect()->route('adminSubCategorias.index');
    }

    public function destroy($subcategoria){
        $subcategory=Subcategoria::find($subcategoria);
        if( $subcategory->status=='active'){$subcategory->status = 'inactive';}
        else{$subcategory->status = 'active';}
        $subcategory->save();
        return redirect()->route('adminSubCategorias.index');
    }
}
