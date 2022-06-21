<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
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
            'nombre' => 'required|min:5',
            'apellido' => 'required|min:5',
            'tipo_documento' => 'required',
            'documento' => 'required|numeric|min:5',
            'email' => 'required|email|unique:clients',
            'celular' => 'required|min:9',
            'password' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return [
            'tipo_documento.required' =>'El formulario a sido alteredo',
        ];
    }
    public function attributes()
    {
        return [
            'id' =>'Identificador de producto',
        ];
    }
}
