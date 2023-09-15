<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarcaRequest extends FormRequest
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
    public function rules(){
    return [

        'nome' => 'required',
        'imagem' => 'required'

    ];
}

    public function messages()
    {

        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.unique' => 'Já existe uma marca com este nome',
            'imagem.required' => 'O campo imagem é obrigatório',
            'imagem.unique' => 'Já existe uma imagem com este nome'
        ];


    }
}
