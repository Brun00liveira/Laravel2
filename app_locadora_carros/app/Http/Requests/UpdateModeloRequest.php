<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateModeloRequest extends FormRequest
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

            'marca_id' => 'exists:marcas,id',
            'nome' => 'required|unique:modelos,nome,'.$this->id.'|min:3',
            'imagem' => 'required|file|mimes:png,jpeg,jpg',
            'numero_portas' => 'required|integer|digits_between:1,5',
            'air_bag' => 'required|boolean',
            'abs' => 'required|boolean'

        ];

    }

    public function messages()
    {
        return [
            'marca_id.exists' => 'A marca selecionada não existe.',
            'nome.required' => 'O nome é obrigatório.',
            'nome.unique' => 'O nome já existe.',
            'nome.min' => 'O nome deve ter no mínimo :min caracteres.',
            'imagem.required' => 'A imagem é obrigatória.',
            'imagem.file' => 'O arquivo deve ser uma imagem.',
            'imagem.mimes' => 'O arquivo deve ser uma imagem no formato PNG, JPEG ou JPG.',
            'numero_portas.required' => 'O número de portas é obrigatório.',
            'numero_portas.integer' => 'O número de portas deve ser um número inteiro.',
            'numero_portas.digits_between' => 'O número de portas deve ter entre :min e :max dígitos.',
            'air_bag.required' => 'O air bag é obrigatório.',
            'air_bag.boolean' => 'O air bag deve ser verdadeiro ou falso.',
            'abs.required' => 'O ABS é obrigatório.',
            'abs.boolean' => 'O ABS deve ser verdadeiro ou falso.',
        ];
    }
}
