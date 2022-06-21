<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index(){
        $data['model'] = Contact::get();
        return view('admin.contacts.index', compact('data'));
    }

    public function store(Request $request){
        $contact= new Contact;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->mobile=$request->mobile;
        $contact->direction=$request->direction;
        $contact->url_direction=$request->url_direction;
        $contact->save();
        return redirect()->route('adminContacto.index');

    }

    public function update(Request $request,$id){
        $contact= Contact::find($id);
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->mobile=$request->mobile;
        $contact->direction=$request->direction;
        $contact->url_direction=$request->url_direction;
        $contact->save();
        return redirect()->route('adminContacto.index');
    }
    public function destroy($id){
        $contact= Contact::find($id);
        $contact->delete();
        return redirect()->route('adminContacto.index');
    }

}
