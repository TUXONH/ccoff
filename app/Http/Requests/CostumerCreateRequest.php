<?php

namespace CCONLINE\Http\Requests;

use CCONLINE\Http\Requests\Request;

class CostumerCreateRequest extends Request
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
        return[
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono_celular' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'pais' => 'required',
            'ciudad' => 'required',
            'cp' => 'required',
        ];
    }
}
