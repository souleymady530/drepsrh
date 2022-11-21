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
            "matriculeAgent"=>"required|string|min:5|max:20|unique:agent",
            "nomAgent"=>"required|string|min:2",
            "prenomAgent"=>"required|string|min:2",
            "sexeAgent"=>"required",
            "DateDeNaissanceAgent"=>"required",
            "DateIntegrationFP"=>"required",
            "TypeDePersonnel"=>"required",
            "LieuDeTravailAgent"=>"required",
            "FonctionAgent"=>"required",
            "DernierDiplomeAccademique"=>"required", 
            "CategorieAgent"=>"required",   
            "DatePriseServiceLieuTravail"=>"required",  
            "DatePriseServiceProvinceRegion"=>"required",  
            "DateDerniereDecoration"=>"required",
            "Titrehonorifique"=>"required|string|min:5|max:191",
            "LieuDeNaissanceAgent"=>"required|string|min:2",
            "EmploiAgent"=>"required",
            "FonctionAgent"=>"required",
        ];
    }
}
