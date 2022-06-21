<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idproducts';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getRecord($value=1){
        $array = DB::table('products as p')
        ->join('categories as c','p.idcategory','=','c.idcategory')
        ->join('type as t','p.idtype','=','t.idtype')
        ->select('p.*','t.name as type','c.name as category','c.slug as cslug','c.price_talla')
        ->where('p.idproducts','=',$value)
        ->orderBy('p.idproducts','desc')
        ->first();
        return $array;
    }

    public function getRecords($table=null,$value=null,$paginate=12,$qtable=null,$cond=null,$queryOne=null,
    $orderby="p.idproducts",$order="desc",$genero=null,$colores=null,$precio=null){
        if($precio!=null){
           $precio=explode('-',$precio);
           $precio1=['tabla'=>'p.price','operador'=>'>=','precio'=>$precio[0]];
           $precio2=['tabla'=>'p.price','operador'=>'<=','precio'=>$precio[1]];
           if($precio2['precio']==0){$precio2=['tabla'=>null,'operador'=>null,'precio'=>null];}
        }else{
            $precio1=['tabla'=>null,'operador'=>null,'precio'=>null];
            $precio2=['tabla'=>null,'operador'=>null,'precio'=>null];
        }
        if($genero=='%%' || $genero==null || $genero==""){
            $genero=['tabla'=>null,'operador'=>null,'precio'=>null];
           
        }else{
            $genero=['tabla'=>'p.genero','operador'=>'like','precio'=>$genero];
        }
        if($colores=='%%' || $colores==null || $colores==""){
            $colores=['tabla'=>null,'operador'=>null,'precio'=>null];
        }else{
            $colores=['tabla'=>'p.colores','operador'=>'like','precio'=>$colores];
        } 

        return DB::table('products as p')
        ->join('categories as c','c.idcategory','=','p.idcategory')
        ->join('type as t','p.idtype','=','t.idtype')
        ->select('p.*','t.name as type','c.name as category','c.slug as cslug')
        ->where($table,'=',$value)
        ->where($qtable,$cond,$queryOne)
        ->where($genero['tabla'],$genero['operador'],$genero['precio'])
        ->where($colores['tabla'],$colores['operador'],$colores['precio'])
        ->where($precio1['tabla'],$precio1['operador'],$precio1['precio'])
        ->where($precio2['tabla'],$precio2['operador'],$precio2['precio'])
        ->orderBy($orderby,$order)
        ->paginate($paginate);
    }
}
