<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    
    use HasFactory;
    public $table="etablissements";
    protected $fillable=
    [
    'id',
    'nomEtablissement',
    'localite',
    'idDpeps',
    
    ];
    public $timestamps=false;
}
