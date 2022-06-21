<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Price;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private $data;
    private $query;
    private $genero;
    private $color;

    public function __construct(Request $request)
    {
        $this->data = new Controller; 
        $this->data=$this->data->data();
        $this->data['prices']=Price::get();
        $this->data['colors']=Color::get();
        $this->data['subcategorias']=Subcategoria::where('idsubcategory','<>','0')->orderBy('price')->get();
        
        $this->query="%" . $request->buscar. "%";
        $this->genero= "%" .$request->genero. "%";
        $this->color="%" . $request->color. "%";
        $this->precio= $request->precio;
        switch ($request->orden) {
            case 'menor':
                $this->orderby='p.price';
                $this->order='asc';
                break;
            case 'mayor':
                $this->orderby='p.price';
                $this->order='desc';
                break;
            default:
                $this->orderby='p.idproducts';
                $this->order='desc';
                break;
        }
    }

    public function index(){
        $products=new Product;
        $this->data['products']= $products->getRecords(null, null,16,'p.name','like',$this->query,$this->orderby,$this->order,$this->genero,$this->color,$this->precio);    
        $data=$this->data;
        return view('products.index',compact('data'));
    }

    public function altamoda($table='p.idtype',$value=1){
        $products=new Product;
        $this->data['products']= $products->getRecords($table, $value,12,'p.name','like',$this->query,$this->orderby,$this->order,$this->genero,$this->color,$this->precio);    
        $data=$this->data;
        return view('products.index',compact('data'));
    }

    public function reyblue($table='p.idtype',$value=2){
        $products=new Product;
        $this->data['products']= $products->getRecords($table, $value,12,'p.name','like',$this->query,$this->orderby,$this->order,$this->genero,$this->color,$this->precio);    
        $data=$this->data;
        return view('products.index',compact('data'));
    } 
 
    public function show(Category $category, Product $product=null){
        $products=new Product;
        if($product==null){
        $this->data['products']= $products->getRecords('p.idcategory', $category->idcategory,12,'p.name','like',$this->query,$this->orderby,$this->order,$this->genero,$this->color,$this->precio);    
            $data=$this->data;
            return view('products.index',compact('data'));
        }else{
            $this->data['product']= $product->getRecord($product->idproducts);
            $this->data['subcategoria']=Subcategoria::where('idcategory','=',$product->idcategory)->orderBy('price','asc')->get();
            $product_related=DB::table('products as p')->join('categories as c','c.idcategory','=','p.idcategory')->join('type as t','p.idtype','=','t.idtype')
            ->select('p.*','t.name as type','c.name as category','c.slug as cslug')
            ->where('p.idcategory','=',$category->idcategory)->where('p.idproducts','<>',$product->idproducts)
            ->inRandomOrder()->paginate(4);

            $this->data['product_related']=$product_related;
            $data=$this->data; 
            return view('products.show',compact('data'));
        }
    }
}
