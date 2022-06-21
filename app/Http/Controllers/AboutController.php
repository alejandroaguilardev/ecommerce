<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{    
    public function index(){
        $data = new Controller; 
        $data=$data->data();        
        return view('abouts.index',compact('data'));
    }

    public function show($string){
        $data = new Controller; 
        $data=$data->data();        
        $data['page']=$string;
        return view('abouts.show', compact('data'));
    }
}
