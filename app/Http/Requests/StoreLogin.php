<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreLogin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'email'=>'required|email',
           'password' => 'required|min:4'
        ];
    }
}
