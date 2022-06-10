<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
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
            'nombre'=>'required|min:4|max:120',
            'descripcion'=>'required|min:4',
            'stock'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'nombre.*' => 'Nombre debe tener minimo 4 caracteres y maximo 120',
            'descripcion.*' => 'Descripcion debe tener un minimo de 4 caracteres',
            'stock.*'=>'El stock debe ser mas de 0'
        ];
    }
}
