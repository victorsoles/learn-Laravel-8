<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePost extends FormRequest
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
            'titulo'    => 'required| min:3| max:160',
            'subtitulo' => 'required| min:4| max:200',
            'conteudo'  => 'nullable| min:5| max:255',
            'imagem'    => 'required| image',
        ];
    }
}
