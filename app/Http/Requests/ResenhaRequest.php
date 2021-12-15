<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResenhaRequest extends FormRequest
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
            //
            'livro' => 'required',
            'nota' => 'required',
            'resenhafinal' => 'required',
        ];
    }
    public function messages()
    {
        return [
            //
            'livro.required' => 'Por favor preencha esse campo',
            'nota.required' => 'Por favor preencha esse campo',
            'resenhafinal.required' => 'Por favor preencha esse campo',
        ];
    }
}
