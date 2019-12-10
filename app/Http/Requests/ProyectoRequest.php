<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'p_nombre' => 'required|min:2|max:15',
            'p_titulo'=>'required|min:2|max:45',
            'p_fechainicio'=>'required',
            //'telf'=>'required:regex:/^[0-9]$/'
        ];
    }
}
