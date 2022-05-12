<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAgentRequest extends FormRequest
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
        //Règles de creation d'enregistrements pour la table agent
        "matriculeAgent"=>"string|min:7|max:20|unique:agent",
        "nomAgent"=>"required",
        "prenomAgent"=>"required",
        "sexeAgent"=>"required",
        "DateDeNaissanceAgent"=>"required",
        "DateIntegrationFP"=>"required",
        "TypeDePersonnel"=>"required",
        "LieuDeTravailAgent"=>"required",
        "FonctionAgent"=>"required",
        "DernierDiplomeAccademique"=>"required", 
        "CategorieAgent"=>"required",   
        "DatePriseServiceLieuTravail"=>"required",                          
        ];
    }
}
