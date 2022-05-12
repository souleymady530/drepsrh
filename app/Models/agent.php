<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    use HasFactory;
    public $table="agent";
    protected $fillable=
    [
      'id',
      'matriculeAgent',
      'nomAgent',
      'prenomAgent',
      'sexeAgent',
      'DateDeNaissanceAgent',
      'DateDerniereDecoration',
      'Titrehonorifique',
      'DateIntegrationFP',
      'DatePriseServiceLieuTravail',
      'DatePriseServiceProvinceRegion',
      'LieuDeNaissanceAgent',
      'TypeDePersonnel',
      'LieuDeTravailAgent',
      'EmploiAgent',
      'FonctionAgent',
      'DernierDiplomeAccademique',
      'CategorieAgent',
      'EchelleAgent',
      'EchellonAgent',

    ];

    public $timestamps=false;
}
