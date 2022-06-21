<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCart extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'id' =>'required|numeric',
            'cantidad' => 'required|numeric',
            'tela' => 'required|numeric',
            'talla' => 'required|',
            'color' => 'required|',
        ];
    }

    public function messages()
    {
        return [
            'id.required' =>'El formulario a sido alteredo',
        ];
    }
    public function attributes()
    {
        return [
            'id' =>'Identificador de producto',
        ];
    }
}
