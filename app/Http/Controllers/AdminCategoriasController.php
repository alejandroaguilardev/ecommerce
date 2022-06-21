<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminCategoriasController extends Controller
{
    public function index(){
        $data['model']=Category::all();
        return view('admin.products.categorias.index',compact('data'));
    }

    public function store(Request $request){
        $category=new Category;
        $category->name = $request->name;
        $category->price_talla = $request->price_talla;
        $category->description = $request->description;
        $category->slug = Str::slug($request->name,'-');
        $category->status = 'active';
        $category->save();
        return redirect()->route('adminCategorias.index');
    }

    public function update(Request $request, $categoria){
        $category=Category::find($categoria);
        $category->name = $request->name;
        $category->price_talla = $request->price_talla;
        $category->description = $request->description;
        $category->slug = Str::slug($request->name,'-');
        $category->save();
        return redirect()->route('adminCategorias.index');
    }

    public function destroy($category){
        $category=Category::find($category);
        if( $category->status=='active'){$category->status = 'inactive';}
        else{$category->status = 'active';}
        $category->save();
        return redirect()->route('adminCategorias.index');
    }
}
