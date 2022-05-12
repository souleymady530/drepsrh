<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsersResquest extends FormRequest
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
            "nomutilisateur"=>"required|string|min:6|max:15|unique:users",
            "email"=>"required|string|email|unique:users",
            "motdepasse"=>"required|string|min:8|max:15|confirmed",
        ];
    }
}
