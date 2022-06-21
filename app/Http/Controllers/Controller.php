<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Company;
use App\Models\Home;
use App\Models\Product;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function data(){
       $categories = Category::get();
       $company = Company::first();
       $contact = Contact::first();
       $data = [
          'company' => $company,
          'contact' => $contact,
          'categories' => $categories,
        ];
        return $data;
    }
}
