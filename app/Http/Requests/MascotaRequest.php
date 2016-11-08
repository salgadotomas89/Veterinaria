<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class MascotaRequest extends Request
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
            'rut' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'caracter' => 'required',
            'fecha' => 'required',
            'peso' => 'required',
            'temperatura' => 'required',
        ];
    }
}