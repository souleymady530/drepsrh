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
            "matriculeAgent"=>"required|string|min:7|max:20|unique:agent",
            "nomAgent"=>"required|string|min:2|max:20",
            "prenomAgent"=>"required|string|min:2|max:20",
            "sexeAgent"=>"required",
            "DateDeNaissanceAgent"=>"required",
            "DateIntegrationFP"=>"required",
            "TypeDePersonnel"=>"required",
            "LieuDeTravailAgent"=>"required|string|min:3|max:100",
            "FonctionAgent"=>"required|string|min:2|max:100",
            "DernierDiplomeAccademique"=>"required", 
            "CategorieAgent"=>"required",   
            "DatePriseServiceLieuTravail"=>"required",  
            "DateDerniereDecoration"=>"required",
            "Titrehonorifique"=>"required|string|min:10|max:191",
            "LieuDeNaissanceAgent"=>"required|string|min:2|max:30",
            "EmploiAgent"=>"required|string|min:2|max:30",
            "FonctionAgent"=>"required|string|min:2|max:30",
        ];
    }
}
