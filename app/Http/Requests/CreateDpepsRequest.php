<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDpepsRequest extends FormRequest
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
            "nomDPEPS"=>"required",
            "nom1erRespDPEPS"=>"required",
            "prenom1erRespDPEPS"=>"required",
            "Emploi1erRespDPEPS"=>"required",
            "DREPS"=>"required",
        ];
    }
}
