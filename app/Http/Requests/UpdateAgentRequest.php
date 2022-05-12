<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentRequest extends FormRequest
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
        $id=$this->segment(2);
        return 
        [
            //Règles de mise à jour de la table agent
            "matriculeAgent"=>"String|Min:7|Max:20|Unique:agent,matriculeAgent,".$id,
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
            "DatePriseServiceLieuTravail "=>"required",             
        ];
    }
}
