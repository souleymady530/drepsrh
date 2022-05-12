<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDrepsRequest extends FormRequest
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
        return 
        [
            "nomDREPS"=>"required|string|min:5",
            "nom1erResponsable"=>"required|string|min:2",
            "prenom1erResponsable"=>"required|string|min:2",
            "Emploi1erResponsable"=>"required|string|min:5",
            "titreHonorifique1erResponsable"=>"required|string|min:10",
        ];
    }
}
