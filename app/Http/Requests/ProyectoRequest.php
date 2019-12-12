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
            'nombre' => 'required|min:2|max:15|regex:/[a-zA-Z+\s]/',
            'titulo'=>'required|min:2|max:45|regex:/[a-zA-Z+\s]/',
            'fechainicio'=>'required|date',
            'fechafin' => 'required|date|after:fechainicio',
            'horasestimadas' => 'required|numeric',
            'empleado_id' => 'required|min:1|max:10|numeric'
            
        ];
    }
}
