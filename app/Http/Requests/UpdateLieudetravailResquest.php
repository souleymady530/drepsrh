<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLieudetravailResquest extends FormRequest
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
           "omLieuDeTravail"=>"required|string|min:5",
            "TypeLieuDeTravail"=>"required|string|min:5",
            "Localite"=>"required|string|min:5",
        ];
    }
}
